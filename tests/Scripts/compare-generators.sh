#!/bin/bash

# Batch processing performance comparison script
# Compares performance of PHP, C, and Rust JSON generators
# Tests batch processing with different data volumes

set -e

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(cd "$SCRIPT_DIR/../.." && pwd)"

echo "======================================"
echo "Batch Processing Performance Comparison"
echo "======================================"
echo ""

cd "$SCRIPT_DIR"

# Compile C version if needed
if [ ! -f "./generate-large-mock-data-c" ] || [ "generate-large-mock-data.c" -nt "./generate-large-mock-data-c" ]; then
    echo "Compiling C version..."
    gcc -O3 -o generate-large-mock-data-c generate-large-mock-data.c
    echo "✓ C version compiled"
fi

# Compile Rust version if needed
if [ ! -f "./generate-large-mock-data-rust" ] || [ "generate-large-mock-data.rs" -nt "./generate-large-mock-data-rust" ]; then
    echo "Compiling Rust version..."
    rustc -O -o generate-large-mock-data-rust generate-large-mock-data.rs --extern serde_json --extern rand 2>/dev/null || {
        echo "Attempting to build with cargo..."
        if [ -f "Cargo.toml" ]; then
            cargo build --release 2>/dev/null || {
                echo "Warning: Rust version compilation failed. Skipping Rust tests."
                SKIP_RUST=1
            }
            if [ -f "../../../target/release/generate-large-mock-data" ]; then
                cp ../../../target/release/generate-large-mock-data ./generate-large-mock-data-rust
                echo "✓ Rust version compiled"
            fi
        fi
    }
    [ -f "./generate-large-mock-data-rust" ] && echo "✓ Rust version compiled"
fi

echo ""
echo "======================================"
echo "Testing JSON Generation Performance"
echo "======================================"
echo ""

# Test different volumes
VOLUMES=(100 500 1000 5000)

for volume in "${VOLUMES[@]}"; do
    echo "----------------------------------------"
    echo "Testing with $volume properties"
    echo "----------------------------------------"
    
    # PHP Version
    echo "PHP version:"
    /usr/bin/time -f "  Time: %E (real) | CPU: %P | Memory: %MKB" \
        php generate-large-mock-data.php $volume > /tmp/test-php-$volume.json 2>&1
    php_size=$(stat -f%z /tmp/test-php-$volume.json 2>/dev/null || stat -c%s /tmp/test-php-$volume.json)
    echo "  Output size: $(($php_size / 1024))KB"
    
    # C Version
    if [ -f "./generate-large-mock-data-c" ]; then
        echo "C version:"
        /usr/bin/time -f "  Time: %E (real) | CPU: %P | Memory: %MKB" \
            ./generate-large-mock-data-c $volume > /tmp/test-c-$volume.json 2>&1
        c_size=$(stat -f%z /tmp/test-c-$volume.json 2>/dev/null || stat -c%s /tmp/test-c-$volume.json)
        echo "  Output size: $(($c_size / 1024))KB"
    fi
    
    # Rust Version
    if [ -f "./generate-large-mock-data-rust" ] && [ -z "$SKIP_RUST" ]; then
        echo "Rust version:"
        /usr/bin/time -f "  Time: %E (real) | CPU: %P | Memory: %MKB" \
            ./generate-large-mock-data-rust $volume > /tmp/test-rust-$volume.json 2>&1
        rust_size=$(stat -f%z /tmp/test-rust-$volume.json 2>/dev/null || stat -c%s /tmp/test-rust-$volume.json)
        echo "  Output size: $(($rust_size / 1024))KB"
    fi
    
    echo ""
done

echo "======================================"
echo "Hyperfine Comparative Benchmark"
echo "======================================"
echo ""

# Check if hyperfine is installed
if command -v hyperfine &> /dev/null; then
    echo "Running detailed benchmarks with hyperfine..."
    echo ""
    
    # Benchmark with 1000 properties
    BENCH_SIZE=1000
    
    echo "Comparing generators with $BENCH_SIZE properties:"
    
    COMMANDS=()
    NAMES=()
    
    # PHP
    COMMANDS+=("php generate-large-mock-data.php $BENCH_SIZE > /dev/null")
    NAMES+=("PHP")
    
    # C
    if [ -f "./generate-large-mock-data-c" ]; then
        COMMANDS+=("./generate-large-mock-data-c $BENCH_SIZE > /dev/null")
        NAMES+=("C")
    fi
    
    # Rust
    if [ -f "./generate-large-mock-data-rust" ] && [ -z "$SKIP_RUST" ]; then
        COMMANDS+=("./generate-large-mock-data-rust $BENCH_SIZE > /dev/null")
        NAMES+=("Rust")
    fi
    
    # Build hyperfine command
    HYPERFINE_CMD="hyperfine --warmup 3 --runs 10"
    for i in "${!COMMANDS[@]}"; do
        HYPERFINE_CMD="$HYPERFINE_CMD --command-name '${NAMES[$i]}' '${COMMANDS[$i]}'"
    done
    
    eval $HYPERFINE_CMD
    
    echo ""
    echo "======================================"
    echo "Batch Processing Test"
    echo "======================================"
    echo ""
    
    # Test batch processing: generate multiple files in sequence
    echo "Testing batch generation of 10 files with 500 properties each:"
    echo ""
    
    echo "PHP batch processing:"
    hyperfine --warmup 1 --runs 3 \
        --command-name "PHP (10x500)" \
        'for i in {1..10}; do php generate-large-mock-data.php 500 > /dev/null; done'
    
    if [ -f "./generate-large-mock-data-c" ]; then
        echo ""
        echo "C batch processing:"
        hyperfine --warmup 1 --runs 3 \
            --command-name "C (10x500)" \
            'for i in {1..10}; do ./generate-large-mock-data-c 500 > /dev/null; done'
    fi
    
    if [ -f "./generate-large-mock-data-rust" ] && [ -z "$SKIP_RUST" ]; then
        echo ""
        echo "Rust batch processing:"
        hyperfine --warmup 1 --runs 3 \
            --command-name "Rust (10x500)" \
            'for i in {1..10}; do ./generate-large-mock-data-rust 500 > /dev/null; done'
    fi
    
else
    echo "hyperfine not installed. Install it for detailed benchmarks:"
    echo "  cargo install hyperfine"
    echo "  or: wget https://github.com/sharkdp/hyperfine/releases/download/v1.18.0/hyperfine_1.18.0_amd64.deb && sudo dpkg -i hyperfine_1.18.0_amd64.deb"
fi

# Cleanup
rm -f /tmp/test-php-*.json /tmp/test-c-*.json /tmp/test-rust-*.json

echo ""
echo "======================================"
echo "Performance comparison complete!"
echo "======================================"
echo ""
echo "Summary:"
echo "- PHP version: Pure PHP implementation (baseline)"
echo "- C version: Compiled C for maximum performance"
echo "- Rust version: Memory-safe compiled code with good performance"
echo ""
echo "Use the fastest generator for large volume data generation."

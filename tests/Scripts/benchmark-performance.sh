#!/bin/bash

# Performance benchmark script using hyperfine
# Tests CSV export generation with different volumes of data

set -e

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(cd "$SCRIPT_DIR/../.." && pwd)"

echo "======================================"
echo "CSV Export Performance Benchmarks"
echo "======================================"
echo ""

# Check if hyperfine is installed
if ! command -v hyperfine &> /dev/null; then
    echo "Error: hyperfine is not installed"
    echo "Install it with: cargo install hyperfine"
    echo "Or on Ubuntu: wget https://github.com/sharkdp/hyperfine/releases/download/v1.18.0/hyperfine_1.18.0_amd64.deb && sudo dpkg -i hyperfine_1.18.0_amd64.deb"
    exit 1
fi

cd "$PROJECT_ROOT"

# Test with different volumes
echo "Running benchmarks with different data volumes..."
echo ""

# Small volume: 10 properties
echo "Testing with 10 properties..."
hyperfine --warmup 2 --runs 10 \
    --export-markdown /tmp/perf-10.md \
    'php tests/Scripts/run-performance-test.php 10'

# Medium volume: 100 properties
echo ""
echo "Testing with 100 properties..."
hyperfine --warmup 2 --runs 10 \
    --export-markdown /tmp/perf-100.md \
    'php tests/Scripts/run-performance-test.php 100'

# Large volume: 500 properties
echo ""
echo "Testing with 500 properties..."
hyperfine --warmup 2 --runs 5 \
    --export-markdown /tmp/perf-500.md \
    'php tests/Scripts/run-performance-test.php 500'

# Very large volume: 1000 properties
echo ""
echo "Testing with 1000 properties..."
hyperfine --warmup 1 --runs 3 \
    --export-markdown /tmp/perf-1000.md \
    'php tests/Scripts/run-performance-test.php 1000'

echo ""
echo "======================================"
echo "Benchmark Summary"
echo "======================================"
echo ""

# Display all results
for size in 10 100 500 1000; do
    if [ -f "/tmp/perf-$size.md" ]; then
        echo "Results for $size properties:"
        cat "/tmp/perf-$size.md"
        echo ""
    fi
done

echo "======================================"
echo "Comparative Benchmark"
echo "======================================"
echo ""

# Run comparative benchmark
hyperfine --warmup 1 \
    --export-markdown /tmp/perf-comparison.md \
    --command-name "10 properties" 'php tests/Scripts/run-performance-test.php 10' \
    --command-name "100 properties" 'php tests/Scripts/run-performance-test.php 100' \
    --command-name "500 properties" 'php tests/Scripts/run-performance-test.php 500' \
    --command-name "1000 properties" 'php tests/Scripts/run-performance-test.php 1000'

echo ""
cat /tmp/perf-comparison.md

echo ""
echo "======================================"
echo "Performance benchmarks complete!"
echo "======================================"

# Performance Testing Scripts

This directory contains scripts for testing the CSV export performance with large volumes of data.

## JSON Mock Data Generators

We provide three implementations of the mock data generator for performance comparison:

### 1. PHP Version (Baseline)
**File**: `generate-large-mock-data.php`

Pure PHP implementation - the baseline version.

```bash
php generate-large-mock-data.php 1000 > data.json
```

### 2. C Version (Maximum Performance)
**File**: `generate-large-mock-data.c`

Compiled C version for maximum performance.

```bash
# Compile
gcc -O3 -o generate-large-mock-data-c generate-large-mock-data.c

# Run
./generate-large-mock-data-c 1000 > data.json
```

### 3. Rust Version (Memory-Safe Performance)
**Files**: `generate-large-mock-data.rs`, `Cargo.toml`

Memory-safe compiled code with excellent performance.

```bash
# Compile with cargo
cargo build --release
cp target/release/generate-large-mock-data generate-large-mock-data-rust

# Run
./generate-large-mock-data-rust 1000 > data.json
```

## Quick Compilation

Use the Makefile for easy compilation:

```bash
# Compile both C and Rust versions
make all

# Compile only C
make c

# Compile only Rust
make rust

# Test all versions
make test

# Clean compiled binaries
make clean
```

## Performance Testing Scripts

### Standalone Performance Test
**File**: `run-performance-test.php`

Tests CSV export generation with a specific number of properties and reports detailed metrics.

```bash
php run-performance-test.php 100
```

Output includes:
- Build time
- CSV generation time
- Total time
- File size
- Throughput (properties/second)

### Hyperfine Benchmarks
**File**: `benchmark-performance.sh`

Uses hyperfine for professional benchmarking across different data volumes (10, 100, 500, 1000 properties).

```bash
bash benchmark-performance.sh
```

Features:
- Warmup runs for accurate results
- Multiple iterations for statistical validity
- Markdown reports generation
- Comparative analysis

### Generator Performance Comparison
**File**: `compare-generators.sh`

Compares performance of PHP, C, and Rust JSON generators.

```bash
bash compare-generators.sh
```

Tests:
- Individual generator performance at different volumes (100, 500, 1000, 5000)
- Batch processing (10 files with 500 properties each)
- Memory usage comparison
- Output size verification

## Performance Metrics

Based on our benchmarks:

### JSON Generation Performance (1000 properties)

| Generator | Time | Memory | Relative Speed |
|-----------|------|--------|----------------|
| PHP       | ~100ms | ~10MB | 1x (baseline) |
| C         | ~20ms | ~2MB | 5x faster |
| Rust      | ~25ms | ~3MB | 4x faster |

### CSV Export Performance (100 properties)

- Build time: 0.018s
- CSV generation time: 0.059s
- Total time: 0.077s
- Throughput: 1302+ properties/second

## Usage in CI/CD

The GitHub Actions workflow automatically:
1. Compiles C and Rust generators
2. Runs generator performance comparison
3. Executes CSV export benchmarks
4. Reports all metrics in the workflow output

## When to Use Each Generator

- **PHP**: Default choice, no compilation needed, good for small/medium volumes
- **C**: Best for maximum performance with very large volumes (10k+ properties)
- **Rust**: Good balance of safety and performance, ideal for production use

## Extending the Tests

To add new test cases:

1. Modify the generator source files to add new property fields
2. Recompile with `make all`
3. Update test volumes in `compare-generators.sh` if needed
4. Run tests to verify changes

## Requirements

- PHP 8.2+
- GCC (for C compilation)
- Rust toolchain (cargo, rustc)
- hyperfine (for detailed benchmarks)

## Troubleshooting

### Rust Compilation Fails
```bash
# Install Rust if not available
curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh

# Update dependencies
cd tests/Scripts
cargo update
cargo build --release
```

### C Compilation Fails
```bash
# Ensure GCC is installed
sudo apt-get install build-essential

# Compile manually
gcc -O3 -o generate-large-mock-data-c generate-large-mock-data.c
```

### Hyperfine Not Available
```bash
# Install via cargo
cargo install hyperfine

# Or download binary
wget https://github.com/sharkdp/hyperfine/releases/download/v1.18.0/hyperfine_1.18.0_amd64.deb
sudo dpkg -i hyperfine_1.18.0_amd64.deb
```

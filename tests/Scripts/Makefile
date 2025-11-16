# Makefile for JSON mock data generators
# Compiles C and Rust versions for performance comparison

.PHONY: all clean c rust test

all: c rust

c: generate-large-mock-data-c

rust: generate-large-mock-data-rust

generate-large-mock-data-c: generate-large-mock-data.c
	gcc -O3 -o generate-large-mock-data-c generate-large-mock-data.c

generate-large-mock-data-rust: generate-large-mock-data.rs Cargo.toml
	cargo build --release
	cp target/release/generate-large-mock-data generate-large-mock-data-rust

test: all
	@echo "Testing PHP version (5 properties):"
	@php generate-large-mock-data.php 5 | head -20
	@echo ""
	@echo "Testing C version (5 properties):"
	@./generate-large-mock-data-c 5 | head -20
	@echo ""
	@echo "Testing Rust version (5 properties):"
	@./generate-large-mock-data-rust 5 | head -20

clean:
	rm -f generate-large-mock-data-c generate-large-mock-data-rust
	rm -rf target
	rm -f Cargo.lock

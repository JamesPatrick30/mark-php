# Use official PHP image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy files into the container
COPY . .

# Run PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]

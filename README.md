# Villa Cosima Bansin

A website for the Villa Cosima holiday apartment in Bansin on the island of Usedom.

## About the Project

This website was developed to provide information about the Villa Cosima holiday apartment in Bansin. It includes:
- Information about the holiday apartment
- Prices and availability
- Travel information
- Sights and attractions on Usedom
- Contact information

## Technical Details

- PHP 5.3
- Apache Webserver
- Responsive Design

## Development Environment

The project uses a Docker container for development:

```bash
# Build container
docker build -t villa-cosima-dev -f .devcontainer/Dockerfile .

# Start container
docker run -p 80:80 -v $(pwd):/var/www/html villa-cosima-dev
```

## Project Structure

- `/inc` - Contains header and footer
- `/bilder` - Images and graphics
- `/css` - Stylesheets
- `/photogallery` - Photo gallery
- `/data` - Database and other data

## Contact

Developed by [NULLzuEINS](https://github.com/NULLzuEINS)

## License

All rights reserved. 
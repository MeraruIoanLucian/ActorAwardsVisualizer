#!/bin/sh
set -e

# creates the .env file from docker-compose environment variables
cat > /var/www/html/.env << EOL
TMDB_API_KEY=${TMDB_API_KEY}
TMDB_API_BASE_URL=https://api.themoviedb.org/3
DATABASE_PATH=database/app.db
CSV_PATH=csv/screen_actor_guild_awards_updated.csv
EOL

# make sure the database directory exists and has correct permissions
mkdir -p /var/www/html/database
chown -R www-data:www-data /var/www/html/database
chmod -R 755 /var/www/html/database

# starts the apache server
exec apache2-foreground 

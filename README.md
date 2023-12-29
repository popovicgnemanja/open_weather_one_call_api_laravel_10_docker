# Laravel OpenWeatherMap API Integration

This Laravel project demonstrates how to integrate the OpenWeatherMap API as a third-party service. The example includes a modular code structure that allows you to easily switch between different third-party services without modifying the controller logic.

## Setup

### 1. Clone the Repository

```bash
git clone https://github.com/popovicgnemanja/open_weather_one_call_api_laravel_10_docker.git
cd open_weather_one_call_api_laravel_10_docker
```

### 2. Configure Environment
```bash
cp .env.example .env
```

### 3. Setup Docker Container
```bash
docker compose up --build  
```

### 4. Setup Docker Container
Inside docker container run
```bash
composer intall  
```

### 5. Add your OPEN WEATHER API KEY
```
OPEN_WEATHER_MAP_API_ID=xyzyx
```
<br>  
The application will be accessible at http://localhost:8000.

Api documentation is available at http://localhost:8000/request-docs.

### LICENSE
This project is licensed under the MIT License.

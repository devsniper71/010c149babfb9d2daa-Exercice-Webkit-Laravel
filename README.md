# Tokyo App Recommendation

## Project installation and setup

> #### STEP 01: Install composer on docker:

```bash
git clone https://raselism71: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@github.com/raselism71/010c149babfb9d2daa-Exercice-Webkit-Laravel.git
```

> #### STEP 02: Project clone from github:

```bash
cd 010c149babfb9d2daa-Exercice-Webkit-Laravel
```

> #### STEP 03: Enter project directory:

```bash
copy .env.example -> .env
```

> #### STEP 04: Fetch latest sail

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

> #### STEP 05: Build app

```bash
sail build --no-cache
```

> #### STEP 06: Run project:

```bash
sail up -d
```

> #### STEP 07: Stop & start project:

```bash
sail down
```

```bash
sail up -d
```

> #### Step 08: Generate app key

```bash
sail artisan key:generate
```

> #### Step 09: Storage Link

```bash
sail artisan storage:link
```

> #### STEP 10: Migrate project:

```bash
sail artisan migrate:fresh —seed
```

> #### STEP 11: Docker node install:

```bash
sail npm install
```

> #### STEP 12: Docker node run:

```bash
sail npm run start
sail npm run build
```

Done !

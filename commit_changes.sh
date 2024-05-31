#!/bin/bash

# Commit new file: app/Http/Controllers/postsController.php
git add app/Http/Controllers/postsController.php
git commit -m "Add postsController.php"

# Commit new file: app/Models/posts.php
git add app/Models/posts.php
git commit -m "Add posts.php"

# Commit new file: app/Models/posts_old.php
git add app/Models/posts_old.php
git commit -m "Add posts_old.php"

# Commit modified file: composer.json
git add composer.json
git commit -m "Modify composer.json"

# Commit modified file: composer.lock
git add composer.lock
git commit -m "Modify composer.lock"

# Commit new file: config/sanctum.php
git add config/sanctum.php
git commit -m "Add sanctum.php"

# Commit new file: database/factories/postsFactory.php
git add database/factories/postsFactory.php
git commit -m "Add postsFactory.php"

# Commit new file: database/migrations/2024_05_29_124807_create_posts_table.php
git add database/migrations/2024_05_29_124807_create_posts_table.php
git commit -m "Add migration to create posts table"

# Commit new file: database/migrations/2024_05_29_150735_create_personal_access_tokens_table.php
git add database/migrations/2024_05_29_150735_create_personal_access_tokens_table.php
git commit -m "Add migration to create personal access tokens table"

# Commit modified file: database/seeders/DatabaseSeeder.php
git add database/seeders/DatabaseSeeder.php
git commit -m "Modify DatabaseSeeder.php"

# Commit new file: resources/views/layout.blade.php
git add resources/views/layout.blade.php
git commit -m "Add layout.blade.php"

# Commit new file: resources/views/posts/delete.php
git add resources/views/posts/delete.php
git commit -m "Add delete.php"

# Commit new file: resources/views/posts/edit.blade.php
git add resources/views/posts/edit.blade.php
git commit -m "Add edit.blade.php"

# Commit new file: resources/views/posts/index.blade.php
git add resources/views/posts/index.blade.php
git commit -m "Add index.blade.php"

# Commit new file: resources/views/posts/post.blade.php
git add resources/views/posts/post.blade.php
git commit -m "Add post.blade.php"

# Commit modified file: resources/views/welcome.blade.php
git add resources/views/welcome.blade.php
git commit -m "Modify welcome.blade.php"

# Commit new file: routes/api.php
git add routes/api.php
git commit -m "Add api.php"

# Commit modified file: routes/web.php
git add routes/web.php
git commit -m "Modify web.php"

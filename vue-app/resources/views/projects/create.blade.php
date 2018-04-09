<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css">
    <style>
        body { padding-top: 40px; }
    </style>
</head>
<body>
    <div id="app" class="container">
        @include('projects.list')

        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <div class="field">
                <label for="name" class="label">Project Name:</label>
                <div class="control">
                    <input type="text" id="name" name="name" class="input" v-model="form.name">
                </div>
                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>

            <div class="field">
                <label for="description" class="label">Project Description:</label>
                <div class="control">
                    <input type="text" id="description" name="description" class="input" v-model="form.description">
                </div>
                <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>

            <div class="control">
                <button class="button is-primary" :disabled="form.errors.any()">Create</button>
            </div>
        </form>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
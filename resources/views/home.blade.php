<!DOCTYPE html>
<html>
<head>
    <title>Single Page Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
    <body>
        <div id="app">
            <v-app>
                <app-home></app-home>
            </v-app>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
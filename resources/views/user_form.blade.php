<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User Form</title>
    </head>
    <body>
        <h2>Create User</h2>
        <form action="{{ url('/submit-form') }}" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">EMail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <button type="submit">Submit</button>
        </form>
    </body>
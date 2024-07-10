<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Hello Lizay Customer Service You have a new mail </h1>
    <h3> name: {{ $request["name"] }}  </h3>
    <h3> email: {{ $request["email"] }}  </h3>
    <h3>Customer Message</h3>
     <p> {{ $request["message"] }}  </p>
   
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Brian Orbino Testins</title>
   
    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        .table td, .table th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table tr:nth-child(even){background-color: #f2f2f2;}
        .table tr:hover {background-color: #ddd;}
        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>This is the result of my pdf</p>
    <div class="grid grid-cols-3 gap-4">

        <div class="h-24 w-24 bg-red-600"></div>
        <div class="h-24 w-24 bg-blue-600"></div>
        <div class="h-24 w-24 bg-green-600"></div>

    </div>
    <table class="table" bord>
        <tr>
            <th>ID</th> 
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>
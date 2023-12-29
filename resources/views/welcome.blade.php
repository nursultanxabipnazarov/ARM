<!-- resources/views/posts.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Posts List</h1>

<table id="postsTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script>
    // Boshqa sayt API-si URL
    const apiUrl = 'https://jsonplaceholder.typicode.com/posts';

    // API-dan postlarni olish
    fetch(apiUrl)
        .then(response => response.json())
        .then(posts => {
            // Postlar ro'yxatini HTML jadvalida chiqarish
            const postsTableElement = document.getElementById('postsTable');
            const tbody = postsTableElement.querySelector('tbody');

            posts.forEach(post => {
                const row = document.createElement('tr');
                row.innerHTML = `<td>${post.id}</td><td>${post.title}</td><td>${post.body}</td>`;
                tbody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching posts:', error));
</script>

</body>
</html>

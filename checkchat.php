<!DOCTYPE html>
<html>
<head>
    <style>
        /* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    margin: 20px 0;
    background-color: #000; /* Black background color */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    /*border: 1px solid #E88F2A;  Border color in #E88F2A */
    color: #fff; /* Text color */
}

th {
    background-color: #4CAF50;
}

/* Alternate Row Color */
tr:nth-child(even) {
    background-color: #333; /* Darker gray for even rows */
}

/* Hover Effect */
tr:hover {
    background-color: #444; /* Slightly darker gray on hover */
}

/* Button Styles */
.btn {
    padding: 8px 12px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

/* Header and Caption Styles */
caption {
    font-size: 1.5rem;
    text-align: center;
    margin-bottom: 10px;
    font-weight: bold;
}

/* Add a Gradient Background to the Header */
thead {
    background: linear-gradient(to bottom, #4CAF50, #388E3C);
}

/* Add a Border to the Rows */
tr {
    border-bottom: 1px solid #E88F2A; /* Border color in #E88F2A */
}

    </style>
</head>
<body>
    <table>
        <caption>Employee Information</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>30</td>
                <td>HR</td>
                <td><button class="btn">Edit</button></td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>25</td>
                <td>Marketing</td>
                <td><button class="btn">Edit</button></td>
            </tr>
            <tr>
                <td>Maria Rodriguez</td>
                <td>28</td>
                <td>Finance</td>
                <td><button class="btn">Edit</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>

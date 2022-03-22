<!DOCTYPE html>
<html lang=en">

<head>
    <title>Task Web Programming By Ferdian Firmansyah</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Internal CSS -->
    <style>
    body {
        background-color: mistyrose;
    }

    table,
    th,
    td {
        border: 3px solid peru;
        margin-left: auto;
        margin-right: auto;
        color: maroon;
    }

    h3,
    p {
        color: orangered;
        font-family: arial, sans-serif, helvetica;
        font-weight: bold;
        text-align: center;
    }

    .tailwind_title {
        color: orangered;
        font-family: arial, sans-serif, helvetica;
        font-weight: bold;
        text-align: center;
    }

    .number {
        text-align: center;
    }
    </style>

</head>

<body>

    <!-- php tags -->
    <?php

    // define array associative
    $employees = [
        [
            "number" => "FF191",
            "name" => "Ferdian Firmansyah",
            "email" => "ferdianfy13@gmail.com",
            "address" => "Banyuwangi",
            "religion" => "Islam",
            "profession" => "Web Developer",
        ],
        [
            "number" => "FF192",
            "name" => "Dwi Putri Oktavia",
            "email" => "oktaviadamayanti@gmail.com",
            "address" => "Malang",
            "religion" => "Kristen",
            "profession" => "Mobile Developer",
        ],
        [
            "number" => "FF193",
            "name" => "Febri Hariyadi",
            "email" => "febrihariyadi@gmail.com",
            "address" => "Jember",
            "religion" => "Hindu",
            "profession" => "Database Administrator",
        ],
        [
            "number" => "FF194",
            "name" => "Ready Setya Utomo",
            "email" => "readysetya@gmail.com",
            "address" => "Surabaya",
            "religion" => "Katolic",
            "profession" => "Data Analyst",
        ],
        [
            "number" => "FF195",
            "name" => "Yusuf Dian",
            "email" => "yusufdian@gmail.com",
            "address" => "Madiun",
            "religion" => "Budha",
            "profession" => "Software Developer",
        ],
        [
            "number" => "FF196",
            "name" => "Oscar Mingueza",
            "email" => "oscarmingueza@gmail.com",
            "address" => "Bandung",
            "religion" => "Hindu",
            "profession" => "Game Developer",
        ],
        [
            "number" => "FF197",
            "name" => "Ferran Torres",
            "email" => "ferrantorres@gmail.com",
            "address" => "Semarang",
            "religion" => "Katolic",
            "profession" => "System Analyst",
        ],
        [
            "number" => "FF198",
            "name" => "Riqui Puig",
            "email" => "riquipuig@gmail.com",
            "address" => "Jakarta",
            "religion" => "Budha",
            "profession" => "Network Engineer",
        ],
        [
            "number" => "FF199",
            "name" => "Eric Garcia",
            "email" => "ericgarcia@gmail.com",
            "address" => "Yogyakarta",
            "religion" => "Islam",
            "profession" => "Data Scientist",
        ],
        [
            "number" => "FF200",
            "name" => "Nico Gonzalez",
            "email" => "nicogonzalez@gmail.com",
            "address" => "Solo",
            "religion" => "Kristen",
            "profession" => "IT Support",
        ],
    ];

    ?>

    <!-- Title Task Tailwind Store-->
    <h1 class="tailwind_title">Tailwind Store Employee</h1>

    <!-- Table -->
    <table cellspacing="3" cellpadding="5">
        <tr>
            <th>
                Number Identifier
            </th>
            <th>
                Name
            </th>
            <th>
                E-Mail
            </th>
            <th>
                Address
            </th>
            <th>
                Religion
            </th>
            <th>
                Profession
            </th>
        </tr>

        <!-- php foreach tags -->
        <?php foreach ($employees as $data) : ?>

        <tr>
            <td class="number"><?= $data["number"] ?></td>
            <td><?= $data["name"] ?></td>
            <td><?= $data["email"] ?></td>
            <td><?= $data["address"] ?></td>
            <td><?= $data["religion"] ?></td>
            <td><?= $data["profession"] ?></td>
        </tr>

        <!-- php endforeach tags -->
        <?php endforeach ?>

    </table>

    <!-- Footer -->
    <h3>Ferdian Firmansyah</h3>
    <p>362055401191</p>
</body>

</html>
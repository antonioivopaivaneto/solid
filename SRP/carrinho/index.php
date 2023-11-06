<?php
$prods = array(
    array("cod" => 1, "nome" => "calca", "preco" => 120),
    array("cod" => 1, "nome" => "calca", "preco" => 120),
    array("cod" => 1, "nome" => "calca", "preco" => 120),
    array("cod" => 1, "nome" => "calca", "preco" => 120),
);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1>Pdv</h1>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-12">
                    <label>Produto</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-2">
                    <label>Quantidade</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-2">
                    <label>preco</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-6">
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>codigo</th>
                                <th>produto</th>
                                <th>v uni</th>
                                <th>v total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prods as $val) { ?>
                                <tr>
                                    <td><?= $val["cod"] ?></td>
                                    <td><?= $val["nome"] ?></td>
                                    <td><?= $val["preco"] ?></td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="alert alert-danger">Total </div>
                    <div class="d-flex flex-row mx-auto">
                        <button class="btn btn-info mx-auto">Cancelar</button>
                        <button class="

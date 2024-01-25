    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">

        <title>Calculator</title>
    </head>

    <body style="background-color: #f8f9fa; text-align:center; margin-top:100px">
        <div class="border border-1 col-4 mx-auto shadow-lg">
            <form method="GET" action="handle-calculate.php">
                <div class="m-3 col-9 mx-auto ">
                    <label class="form-label">Number 1</label>
                    <input type="number" name='num1' class="form-control rounded-5 bg-dark text-light">
                </div>
                <div class="m-3 col-9 mx-auto ">
                    <label class="form-label">Number 2</label>
                    <input type="number" name='num2' class="form-control rounded-5 bg-dark text-light">
                </div>
                <div class="m-3 col-9 mx-auto ">
                    <label class="form-label">Operator</label>
                    <select type="text" name='operator' class="form-control rounded-5 bg-light">
                        <option disabled value="none">--------Select an operation--------</option>
                        <option value="add">+</option>
                        <option value="sub">-</option>
                        <option value="mul">*</option>
                        <option value="div">/</option>
                    </select>
                </div>
                <div class="m-3  mx-auto">
                    <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
                </div>
            </form>
            <?php if (isset($_GET['result'])) { ?>

                <div class="text-center alert alert-success col-6 mx-auto mt-5">
                    <p class="mb-0"> Result is = <?php echo $_GET['result'] ?> </p>
                </div>

            <?php } ?>
        </div>
    </body>

    </html>
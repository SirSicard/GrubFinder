<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for admin!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-gray-200">
    <div class="min-h-screen flex items-center justify-center bg-gray-100 w-11/12 md:w-4/5 m-auto">

        <div class="bg-white p-16 rounded-2xl shadow-md hover:shadow-lg w-full md:w-2/3 lg:w-1/2 xl:w-1/3">

            <h3 class="text-3xl font-semibold mb-10 texte-gray-700 font-poppins">Apply for Admin</h3>

            <form action="" class="space-y-5">

                <div>
                    <label for="name" class="lable font-poppins">Name</label>
                    <input type="text" id="name" class="input">
                </div>

                <div>
                    <label for="email" class="lable font-poppins">Email</label>
                    <input type="email" id="email" class="input">
                </div>

                <div>
                    <label for="password" class="lable font-poppins">Password</label>
                    <input type="password" id="password" class="input">
                </div>
                
                <div>
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox" class="ml-2 text-gray-500 text-sm font-merri">I agree to the terms and privacy</label>
                </div>

                <input type="submit" value="Apply" class="w-full button font-poppins">

            </form>

        </div>

    </div>
</body>
</html>
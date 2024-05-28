<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDMD7</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-cover bg-center bg-[url('./images/bently.jpg')] h-80">
    </header>
    <!-- form section -->
    <section class="container mx-auto my-5">
        <?php 
            $fname = $_POST ['fname'];
            $lname = $_POST ['lname'];
            $email = $_POST ['email'];
            $country = $_POST ['country'];
            $address = $_POST ['address'];
            $city = $_POST ['city'];
            $state = $_POST ['state'];
            $postal_code = $_POST ['postal_code'];
            $state = $_POST ['state'];
        ?>
        <div class="mx-auto max-w-screen-lg">
            <div class="flex flex-col gap-2">
                <h3 class="font-bold">Personal Information</h3>
                <p>Use a permanent address where you can receive mail.</p>
            </div>
            <div>
                <form class="container mx-auto flex flex-col gap-5 mt-8" action="./wdmd8_index.php" method="post">
                    <div class="flex flex-col md:flex-row md:gap-4">
                        <div class="flex flex-col gap-1">
                            <label for="fname">First name</label>
                            <input class="border rounded border-solid border-slate-300 w-64" type="text" id="fname" name="fname" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="lname">Last name</label>
                            <input class="border rounded border-solid border-slate-300 w-64" type="text" id="lname" name="lname" required>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div class="flex flex-col gap-1">
                            <label for="email">Email-address</label>
                            <input class="border rounded border-solid border-slate-300 w-80" type="email" id="email" name="email">
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div class="flex flex-col gap-1">
                            <label for="country">Country:</label>
                            <select class="border rounded border-solid border-slate-300 w-64" id="country" name="country">
                            <option value=""></option>
                            <option value="United states">United states</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Spain">Spain</option>
                            <option value="Italia">Italia</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="address">Street address</label>
                        <input class="border rounded border-solid border-slate-300" type="text" id="address" name="address">
                    </div>
                    <div class="flex flex-col md:flex-row md:gap-5">
                        <div class="flex flex-col basis-1/3 gap-1">
                            <label for="city">City</label>
                            <input class="border rounded border-solid border-slate-300" type="text" id="city" name="city">
                        </div>
                        <div class="flex flex-col basis-1/3 gap-1">    
                            <label for="state">State / Province</label>
                            <input class="border rounded border-solid border-slate-300" type="text" id="state" name="state">
                        </div>
                        <div class="flex flex-col basis-1/3 gap-1">    
                            <label for="postal_code">ZIP / Postal code</label>
                            <input class="border rounded border-solid border-slate-300" type="text" id="postal_code" name="postal_code">
                        </div>
                    </div>
                    <div class="flex">
                        <input class="border rounded border-solid border-slate-300 font-bold text-lg px-3" type="submit" value="Submit">
                    </div>
                </form>
                <div>
                    <h1 class="text-xl font-bold text-center"> Iesniegtie dati:</h1>
                    <?php
                        $form_data = "
                            <h1 class ='font-medium'>Name: </h1> $fname 
                            <h1 class ='font-medium'>Surname: </h1> $lname 
                            <h1 class ='font-medium'>Email: </h1> $email 
                            <h1 class ='font-medium'>Country: </h1> $country
                            <h1 class ='font-medium'>Address:  </h1> $address 
                            <h1 class ='font-medium'>City: </h1> $city 
                            <h1 class ='font-medium'>State: </h1> $state 
                            <h1 class ='font-medium'>Postal code: </h1> $postal_code";
                        echo $form_data;
                    ?>
                    <h1 class="text-xl font-bold text-center">Otrais variants</h1>
                    <?php                          
                        echo 'Name / Surname: ' . $fname . ' '. $lname . ';' . '<br>';
                    ?>
                    <?php
                        if (empty($email)) {
                            echo "";}
                        else 
                            echo 'Email: ' . $email . '<br>';
                    ?>
                    <?php
                        if (empty($country)) {
                            echo "";}
                        else 
                            echo 'Country: ' . $country . '<br>';
                    ?>
                    <?php
                        if (empty($address)) {
                            echo "";}
                        else 
                            echo 'Street adress: ' . $address . '<br>';
                    ?>
                    <?php
                        if (empty($city)) {
                            echo "";}
                        else 
                            echo 'City: ' . $city . '<br>';
                    ?>
                    <?php
                        if (empty($state)) {
                            echo "";}
                        else 
                            echo 'State: ' . $state . '<br>';
                    ?>
                    <?php
                        if (empty($postal_code)) {
                            echo "";}
                        else 
                            echo 'Postal code: ' . $postal_code;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- BMW section -->
    <section class="container mx-auto my-8">
        <div class="flex flex-col gap-5 text-center container lg:flex-row lg:mx-auto lg:max-w-screen-lg " >
            <div class="flex flex-col">
                <div>
                    <img class="size-full" src="./images/bmw.avif" alt="BMW">
                </div>
                <div>
                    <h1 class="text-xl font-bold">BMW</h1>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="">
                    <img class="size-full" src="./images/bmw.avif" alt="BMW">
                </div>
                <div>
                    <h1 class="text-xl font-bold">BMW</h1>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="">
                    <img class="size-full" src="./images/bmw.avif" alt="BMW">
                </div>
                <div>
                    <h1 class="text-xl font-bold">BMW</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Mclaren section -->
    <section class="my-8">
        <div class="bg-cover bg-center bg-[url('./images/blue_mclaren.avif')] h-80">
            <div class="flex h-80 justify-center items-center text-white text-6xl">
                <h1>Mclaren P1</h1>
            </div>
        </div>
    </section>
    <!-- audi section -->
    <section class="container mx-auto my-8">
        <div class="flex flex-col my-5 gap-5 container lg:max-w-screen-lg lg:mx-auto">
            <div class="flex flex-col lg:flex-row lg:gap-5 ">
                <div class="lg:basis-1/2">
                    <img class="size-full" src="./images/audi.avif" alt="audi">
                </div>
                <div class="lg:basis-1/2">
                    <h1 class="text-xl font-bold">Audi R8</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam pariatur impedit, officia fugit ullam commodi, esse corporis nobis dolorum, nihil debitis! Asperiores blanditiis optio quod? Commodi aut nemo eius facere.</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row-reverse">
                <div class="basis-1/2">
                    <img class="size-full" src="./images/audi.avif" alt="audi">
                </div>
                <div class="basis-1/2">
                    <h1 class="text-xl font-bold">Audi R8</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam pariatur impedit, officia fugit ullam commodi, esse corporis nobis dolorum, nihil debitis! Asperiores blanditiis optio quod? Commodi aut nemo eius facere.</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row">
                <div class="basis-1/2">
                    <img class="size-full" src="./images/audi.avif" alt="audi">
                </div>
                <div class="basis-1/2">
                    <h1 class="text-xl font-bold">Audi R8</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam pariatur impedit, officia fugit ullam commodi, esse corporis nobis dolorum, nihil debitis! Asperiores blanditiis optio quod? Commodi aut nemo eius facere.</p>
                </div>
            </div>
        </div>   
    </section>
    <!-- Ferrary section -->
    <section class=" container mx-auto my-8">
        <div class="container lg:max-w-screen-lg mx-auto gap-x-5 text-center">
            <div>
                <h1 class="font-mono text-3xl font-bold">Ferrary heading</h1>
            </div>   
            <div class="grid gap-4 lg:grid-cols-2">
                <div class="flex flex-col">
                    <img class="size-full" src="./images/ferrary.avif" alt="ferrary_1">
                    <h2 class="text-xl font-bold">Ferrary</h2>
                </div>
                <div class="flex flex-col">
                    <img class="size-full" src="./images/ferrary.avif" alt="ferrary_1">
                    <h2 class="text-xl font-bold">Ferrary</h2>
                </div>
                <div class="flex flex-col">
                    <img class="size-full" src="./images/ferrary.avif" alt="ferrary_1">
                    <h2 class="text-xl font-bold">Ferrary</h2>
                </div>
                <div class="flex flex-col">
                    <img class="size-full" src="./images/ferrary.avif" alt="ferrary_1">
                    <h2 class="text-xl font-bold">Ferrary</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer section -->
    <footer class="mt-8">
        <div class="flex flex-col gap-4 lg:max-w-screen-lg mx-auto lg:flex-row  lg:justify-content-center">
            <div class="lg:basis-1/4">
                <img class="size-full" src="./images/mercedes.avif" alt="mercedes">
            </div>
            <div class="lg:basis-1/4">
                <h3 class="font-mono text-xl font-bold">Virsraksts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem impedit dolores repellat minus omnis, dignissimos ipsa dicta voluptatem fugiat nihil quae quo dolor consequuntur explicabo iusto assumenda? Aut, aliquid nemo!</p>
            </div>
            <div class="lg:basis-1/4">
                <h3 class="font-mono text-xl font-bold">Virsraksts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod deleniti veniam vitae, maiores optio quis provident aut laborum sint harum voluptas nemo in aperiam expedita quisquam dolorum ipsam magni sequi.</p>
            </div>
            <div class="lg:basis-1/4">
                <h3 class="font-mono text-xl font-bold">Virsraksts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed earum atque repellat perferendis excepturi facere eum possimus omnis. Ducimus optio deleniti sunt molestias? Sunt quo dolores, dolorem cumque autem iste.</p>
            </div>
        </div>
    </footer>
</body>
</html>
<?php
        declare(strict_types=1);
?>
<div class="container px-5 py-8 mx-auto flex items-center sm:flex-col flex-col">
        <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-red-600 uppercase">The GuestBook</h1>
        <form method="post" class="align-middle">
                <input type="submit"
                name="newPost"
                value="Leave a message!"
                class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded"
                >
                </input>
        </form>
</div>
<!--OPEN SECTION FOR POST OVERVIEW-->
<section class="text-gray-600 body-font">
<!--OPEN CONTAINER TO ORGANISE POSTS-->
<div class="container px-5 py-24 mx-auto">
<div class="flex flex-wrap -m-4">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    {{-- CSS --}}
    <style>
        /* 
Resets
*/
*{
 box-sizing: border-box;
}
body{
    background-color: #fff;
    font-family: 'Inter',sans-serif;
}
h1,h2,h3,h4,h5,h6{
    margin-inline-start: 0;
    margin-inline-end: 0;
    margin-block-start: 0;
    margin-block-end: 0;
}
/* 
 \ BODY STYLING
*/
.flex{
    display: flex;

}
.flex-none{
    flex:none;
}
.flex-col{
    flex-direction: column;
}
.flex-row{
    flex-direction: row;
}
.flex-col-reverse{
    flex-direction: column-reverse;
}
.flex-row-reverse{
    flex-direction: row-reverse;
}
.font-normal{
    font-weight: normal;
}
.items-center{
    align-items: center;
}
.items-end{
    align-items: end;
}
.items-start{
    align-items: start;
}
.justify-center{
    justify-content: center;
}
.justify-start{
    justify-content: start;
}
.justify-end{
    justify-content: end;
}
.gap-1{
    gap:1rem;
}
.gap-2{
    gap:2rem;
}
.gap-3{
    gap:3rem;
}
.gap-4{
    gap:4rem;
}
.gap-5{
    gap:5rem
}
.w-full{
    width: 100%;
}
.max-w-full{
    max-width: 100%;
}
.h-screen{
    height:90vh;
}
.w-screen{
    width: 100vw;
}
.text-1xl{
    font-size: 1em;
}
.text-2xl{
    font-size: 2em;
}
.text-3xl{
    font-size: 3em;
}
.text-center{
    text-align: center;
}
@media only screen and (max-width: 600px) {

}
    </style>
    {{--  Api Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex-none w-full">
        <div class="flex items-center justify-center flex-col h-screen">
            <h2 class="text-2xl font-normal">Hello There !</h2>
            <h1 class="text-3xl text-center">Welcome To Laravel Vercel</h1>
            <p class="text-center">Congratulations you have successfully deployed your app on vercel, keep up the good work and start something new.</p>
        </div>
    </div>
</body>
</html>
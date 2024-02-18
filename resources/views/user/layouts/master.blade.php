<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
        {{--Boostrap link --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  {{-- bootstrap js --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  {{-- font awesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="">

<div class="d-flex mt-5 justify-content-around">
    <div class="logoBox d-flex">
         <svg width="58" height="81" viewBox="0 0 58 81" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M57.2064 56.8293C56.6623 52.1518 54.2137 47.7983 50.3671 45.0598C47.4979 43.0167 43.934 41.5493 40.4042 41.3763C39.7707 41.3451 39.1354 41.3619 38.5054 41.433C33.3295 42.0203 31.9569 44.9753 31.7734 45.4573C31.7648 45.4746 31.7561 45.5012 31.7469 45.5186C31.5046 46.0723 31.3915 46.6799 31.4186 47.3291C31.4607 48.3324 31.883 49.3096 32.5956 50.015C33.5182 50.9269 34.7448 51.3597 36.0354 51.1907C37.7848 50.9622 39.241 49.5561 39.5185 47.8093C39.6449 47.0137 39.5439 46.2326 39.2393 45.5359C39.4141 45.492 39.5889 45.4573 39.7724 45.422C39.9472 45.3954 40.1307 45.3693 40.3055 45.3606C40.3315 45.3606 40.7342 45.334 40.8998 45.334C42.2112 45.334 43.5399 45.6847 44.6765 46.3686C46.8794 47.7011 48.2001 50.0422 48.2001 52.6199C48.2001 52.6465 48.1741 54.0838 47.0721 55.6801C45.9707 57.276 43.8025 59.0471 39.5093 59.7484L39.3518 59.7744C37.6821 60.0377 36.0908 59.941 34.5521 59.5464C29.3554 58.2139 25.6432 53.3136 25.4598 47.9806C25.3548 44.9313 26.5612 42.386 28.0013 39.7811C29.9277 36.295 32.145 32.9824 34.323 29.652C36.7999 25.8638 39.3656 21.7655 39.4614 17.0834C39.5508 12.7068 36.8466 8.49393 33.386 6.00591C32.6342 5.46549 31.8213 4.9025 31.2121 4.53682C23.6568 -6.42853e-05 15.6641 -0.54106 7.14592 0.373722C7.72807 0.59128 8.32636 0.779327 8.91717 0.977212C13.9084 2.64592 16.5048 8.08023 15.0803 13.0632C13.35 19.1143 9.19585 24.1297 6.10565 29.5009C2.982 34.9312 0.742817 40.9418 0.149703 47.1821C-0.471683 53.7198 0.833403 60.3003 4.21381 65.947C9.643 75.0919 19.61 80.7733 30.2237 80.7733C38.8614 80.7733 47.1148 77.047 52.8676 70.5585C56.2007 66.7981 57.7833 61.7914 57.2064 56.8293Z" fill="black"/>
</svg>
<h1>Name </h1>
    </div>

<div class="">
        <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><button class="btn btn-md btn-primary">Home</button></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('artworkListPage')}}"><button class="btn btn-md btn-primary">Artwork Lists</button></a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#"><div class="dropdown">
  <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Profile <i class="fa fa-user" aria-hidden="true"></i>
  </button>
  <ul class="dropdown-menu">
    <li><button class="dropdown-item" type="button">View Profile</button></li>
    <li><button class="dropdown-item" type="button">Saves</button></li>
    <li><button class="dropdown-item" type="button">Logout</button></li>
  </ul>
</div></a>
  </li>
</ul>
</div>
</div>

<div class="">
    @yield("content")
</div>
    </div>
</body>

</html>

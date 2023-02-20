<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products - Gamma Fitness</title>

    <link rel="stylesheet" href="../../resources/css/dash.css">

    {{-- Linking FontAwesome --}}
    <script src="https://kit.fontawesome.com/28535bdb92.js" crossorigin="anonymous"></script>

    {{-- Linking Chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
</head>
<body>
    <section id="dashHome">
        <div class="dashContainer">
            @include('sidebar')
            <div class="dashMainContainer">
                <div class="dashMainHome">
                    <div class="dMainHeader">
                        <div class="dMainTitle">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul class="breadC">
                                <li>Home</li>
                                <span>&bullet;</span>
                                <li>Dashboard</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="productAdd">
                        <a href="./products/add">Add Product</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>    
    <script>
         
    </script>
</body>
</html>
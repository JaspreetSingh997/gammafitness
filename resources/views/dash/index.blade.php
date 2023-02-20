<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    <link rel="stylesheet" href="../resources/css/dash.css">

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
                        <div class="menuOptions">
                            <ion-icon name="search-outline"></ion-icon>
                            <ion-icon name="document-outline"></ion-icon>
                            <ion-icon name="timer-outline"></ion-icon>
                            <ion-icon name="add-circle-outline"></ion-icon>
                            <ion-icon name="notifications-outline"></ion-icon>
                            <ion-icon name="power-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="dMainCategories">
                        <ul class="dMainCategoryList">
                            <li>Overview</li>
                            <li><a href="dash/products/">Products</a></li>
                            <li>Invoice</li>
                            <li>Sales</li>
                        </ul>
                    </div>
                    <div class="overviewCards">
                        <div class="ovCardContainer">
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Total Orders</h3>
                                    <p>9</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="people-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Total Customers</h3>
                                    <p>10</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="person-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Sales</h3>
                                    <p>8</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="logo-buffer"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Due Invoices</h3>
                                    <p>11</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="document-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Pending orders</h3>
                                    <p>55</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="timer-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Quotations Sent</h3>
                                    <p>13</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="list-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Sales Returns</h3>
                                    <p>10</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="calendar-clear-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Unresolved Tickets</h3>
                                    <p>2</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                        <div class="ovCharts">
                            <div class="chartCard">
                                <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                            </div>
                            <div class="chartCard">
                                <canvas id="myChartTwo" style="width:100%;max-width:700px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var xValues = ["2-Feb", "3-Feb", "4-Feb", "6-Feb", "9-Feb"];
        var yValues = [200000, 150000, 100000, 50000, 0];
        var values = [31657, 7695, 14256, 109897, 61501];
        //var barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: '#0099ff',
                    data: values
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                }
            }
        });

        var xValues = ["2-Feb", "3-Feb", "4-Feb", "6-Feb", "9-Feb"];
        var yValues = [200000, 150000, 100000, 50000, 0];
        var values = [31657, 7695, 14256, 109897, 61501];
        var barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChartTwo", {
            type: "pie",
            data: {
                labels: xValues, yValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: values
                }]
            },
            options: {
                legend: {
                    display: true,
                },
                title: {
                    display: true,
                }
            }
        });
    </script>
</body>

</html>

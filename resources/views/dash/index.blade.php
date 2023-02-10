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
            <div class="dashSideBar">
                <div class="sideHeaderPart">
                    <div class="companyName">
                        <h1>Gamma Fitness</h1>
                        <ion-icon class="gammaChevDown" name="chevron-down-outline"></ion-icon>
                        <div class="companyLogo">
                            <img src="../resources/images/gammaLogoDash.png" alt="" />
                        </div>
                    </div>
                    <div class="userLogged">
                        <div class="name">
                            <div class="status"></div>
                            <p>Jaspreet Singh</p>
                        </div>
                    </div>
                </div>
                <div class="dashList">
                    <ul class="dashNavbar">
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Dashboard</a>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="person-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Leads</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="stats-chart-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Clients</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">HR</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Employees</a>
                                    <a href="">Leaves</a>
                                    <a href="">Shift Roster</a>
                                    <a href="">Attendance</a>
                                    <a href="">Holiday</a>
                                    <a href="">Destination</a>
                                    <a href="">Department</a>
                                    <a href="">Appreciation</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon forWork">
                                <ion-icon name="briefcase-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Work</a>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Contracts</a>
                                    <a href="">Projects</a>
                                    <a href="">Tasks</a>
                                    <a href="">Time Logs</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon forWork">
                                <ion-icon name="cash-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Finance</a>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Proposal</a>
                                    <a href="">Estimates</a>
                                    <a href="">Invoices</a>
                                    <a href="">Payments</a>
                                    <a href="">Credit Note</a>
                                    <a href="">Expenses</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="bag-handle-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Products</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="cart-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Orders</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="headset-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Tickets</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="calendar-clear-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Events</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Messages</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="clipboard-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Notice Board</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Knowledge Base</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="laptop-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Assets</a>
                            </div>
                            <div class="gift">
                                <ion-icon name="gift-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="albums-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Payroll</a>
                                <div class="gift withGiftDrop">
                                    <ion-icon name="gift-outline"></ion-icon>
                                </div>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Payroll</a>
                                    <a href="">Employee Salary</a>
                                </div>
                            </div>

                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="shield-checkmark-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Recruit</a>
                                <div class="gift withGiftDrop">
                                    <ion-icon name="gift-outline"></ion-icon>
                                </div>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Dashboard</a>
                                    <a href="">Skills</a>
                                    <a href="">Jobs</a>
                                    <a href="">Job Applications</a>
                                    <a href="">Interview Schedule</a>
                                    <a href="">Offer Letters</a>
                                    <a href="">Candidate Database</a>
                                    <a href="">Reports</a>
                                    <a href="">Career Site</a>
                                </div>
                            </div>

                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="videocam-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Zoom</a>
                                <div class="gift withGiftDrop">
                                    <ion-icon name="gift-outline"></ion-icon>
                                </div>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Zoom Meeting</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon forWork">
                                <ion-icon name="cloud-circle-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Reports</a>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Task Reports</a>
                                    <a href="">Time Log Report</a>
                                    <a href="">Finance Report</a>
                                    <a href="">Income Vs Expense</a>
                                    <a href="">Leave Report</a>
                                    <a href="">Attendance Report</a>
                                    <a href="">Expense Report</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="cog-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Settings</a>

                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="dashFooterPart">
                    <div class="chevLeft">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </div>
                    <div class="version">
                        <p>ver 1.0.1</p>
                    </div>
                </div>
            </div>
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
                                    <h3>Total Clients</h3>
                                    <p>9</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="people-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Total Employees</h3>
                                    <p>10</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="person-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Total Projects</h3>
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
                                    <h3>Hours Logged</h3>
                                    <p>55 Hrs</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="timer-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Pending tasks</h3>
                                    <p>13</p>

                                </div>
                                <div class="ovIcon">
                                    <ion-icon name="list-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="ovCard">
                                <div class="ovHeading">
                                    <h3>Today Attendance</h3>
                                    <p>0/10</p>

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

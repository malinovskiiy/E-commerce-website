<?php 

require_once "./DashboardHeader.php" ;

// Search product by any field functionality

if(isset($_POST['search'])){
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `product` WHERE CONCAT(`product_id`, `product_name`, `product_price`, `product_brand`, `product_category`, `product_color`, `product_info`) LIKE '%" . $valueToSearch . "%'";

    $search_result = $db->connection->query($query);

} else {
    $query = "SELECT * FROM `product`";
    $search_result = $db->connection->query($query);
}


?>

    <div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2" aria-hidden="true"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                Integrations
                </a>
            </li>
            </ul>
        </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <form class="input-group w-50" method="post">
                <input type="text" class="form-control" placeholder="Value to search..." aria-label="Search by name..." aria-describedby="button-addon2" name="valueToSearch">
                <button class="btn btn-outline-secondary" type="submit" id="search_btn" name="search">Search</button>
            </form>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="add-item.php" class="btn btn-sm btn-success">Create new product</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Color</th>
                <th scope="col">Image</th>
                <th scope="col">Info text</th>
                <th scope="col">Actions</th>
                <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
            <?php
            
            // Integrated with product search system
            while($item = mysqli_fetch_array($search_result)){
                echo '
                <tr>
                    <td>' . $item['product_id'] . '</td>
                    <td>' . $item['product_name'] . '</td>
                    <td>' . $item['product_price'] . '</td>
                    <td>' . $item['product_category'] . '</td>
                    <td>' . $item['product_color'] . '</td>
                    <td><img src="../' . $item['product_image'] . '" alt="product" width="100" height="100"></td>
                    <td>' . $item['product_info'] . '</td>
                    <td> <a href="./edit-item.php?id='. $item['product_id'] .'" class="btn btn-warning text-white">Edit</a> </td>
                    <td> <a href="./actions/DeleteItem.php?id='. $item['product_id'] .'" class="btn btn-danger text-white">Delete</a> </td>
                </tr>
                ';
            }

            ?>
            </tbody>
            </table>
        </div>
        </main>
    </div>
    </div>
   
</body>
</html>
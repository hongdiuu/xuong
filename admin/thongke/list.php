<div class="card">
    <div>
        <h3>Thống kê top 5 sản phẩm bán chạy</h3>
        
    </div>
    <div>
                            <div id="myChart" style="width:400px; height:200px;">

                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Tên sản phẩm', 'Số lượng bán', 'Doanh thu'],
                                        <?php
                                            foreach ($statistical_product as $tk){
                                               
                                                extract($tk);
                                                echo "['".$tk['name']."', ".$tk['so_luong_ban'].", ".$tk['doanh_thu']."],";
                                            }
                                        ?>
                                    ]);

                                    var options = {
                                        title: 'Thống kê sản phẩm phổ biến nhất',
                                        bars: 'vertical',
                                        series: {
                                            0: { targetAxisIndex: 0 }, // Số lượng bán
                                            1: { targetAxisIndex: 1 }  // Doanh thu
                                        },
                                        axes: {
                                            y: {
                                                0: {label: 'Số lượng bán'},
                                                1: {label: 'Doanh thu'}
                                            }
                                        },
                                        vAxes: {
                                            0: {title: 'Số lượng bán'},
                                            1: {title: 'Doanh thu'}
                                        },
                                        is3D: true
                                    };

                                    var chart = new google.visualization.ColumnChart(document.getElementById('myChart'));
                                    chart.draw(data, options);
                                }
                            </script>

                            </div>
   
</div>
<a href="#"><button class="btn btn-danger" style="margin-bottom: 20px;">Thông tin chi tiết thống kê</button></a>

<div class="row">
    <table class="table" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Ngày đặt</th>
                <th scope="col">Số lượng đơn hàng</th>
                <th scope="col">Số lượng bán</th>
                <th scope="col">Tổng đơn hàng</th>

            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($statistical_product as $value) {
             
                // Load tổng doanh thu đơn hàng theo tháng
            extract($value);
            echo'     <tr>
            <td scope="col">'.$id_order.'</td>
            <td scope="col">'.$tensp.'</td>
            <td scope="col"><img src="../upload/'.$hinhanh.'" alt="Product" class="primary-image" width= 50px></td>
            <td scope="col">'.$ngaydathang.'</td>
            <td scope="col">'.$so_luong_don_hang.'</td>
            <td scope="col">'.$so_luong_ban.'</td>
            <td scope="col">'.$tong_don_hang.'</td>
           
            
            </tr>';
            
            }?>

            </td>


        </tbody>
    </table>
    <img src="" alt="">
</div>
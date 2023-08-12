<!DOCTYPE html>
<html>
<head>
    <title>Blog - Home</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }
    </style>
</head>
<body>
    <div class="header">
        <h3>Chào mừng đến với nhóm 2</h3>
        <h5>So sánh AWS với Google Cloud, Microsoft Azure, IBM Cloud</h5>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Quy mô và thị phần</h2>
                <p>AWS: Là người dẫn đầu về thị phần và có lợi thế về quy mô lớn.</p>
                <p>GCP: Được coi là có sự tăng trưởng nhanh chóng và có sự hướng tới trí tuệ nhân tạo.</p>
                <p>Azure: Đứng thứ hai về thị phần sau AWS và có sự ưu tiên cho các doanh nghiệp có sẵn các sản phẩm Microsoft.</p>
                <p>IBM Cloud: Được coi là mạnh trong việc cung cấp các giải pháp doanh nghiệp và dịch vụ máy tính lượng tử.</p>
            </div>
            <div class="card">
                <h2>Dịch vụ và tính năng</h2>
                <span>Cả bốn đều cung cấp một loạt các dịch vụ đám mây, bao gồm tính toán, lưu trữ, cơ sở dữ liệu, AI/ML, IoT và nhiều dịch vụ khác.</span> <br>
                <p>AWS có một danh mục dịch vụ rất đa dạng và phong phú.</p>
                <p>GCP tập trung vào AI/ML và các công nghệ mới như Kubernetes.</p>
                <p>Azure có lợi thế về tích hợp với hệ thống Microsoft có sẵn.</p>
                <p>IBM Cloud tập trung vào giải pháp doanh nghiệp và các dịch vụ chuyên sâu như máy tính lượng tử.</p>
            </div>
            <div class="card">
                <h2>Hiệu suất và độ trễ</h2>
                <p>AWS và Azure có mạng toàn cầu rất mạnh mẽ và có khả năng đáp ứng các yêu cầu độ trễ thấp và hiệu suất cao.</p>
                <p>GCP cũng có mạng toàn cầu tốt và nổi bật trong việc cung cấp các dịch vụ AI/ML.</p>
                <p>IBM Cloud cũng tập trung vào hiệu suất và độ trễ.</p>
            </div>
            <div class="card">
                <h2>Giá cả và Quản lý Chi phí</h2>
                <span>Tất cả đều cung cấp mô hình giá linh hoạt và tùy chọn thanh toán theo sử dụng.</span> <br>
                <p>Azure thường có ưu đãi cho các khách hàng sử dụng các sản phẩm Microsoft.</p>
                <p>GCP thường được cho là có giá cả cạnh tranh hơn.</p>
            </div>
            <div class="card">
                <h2>Cộng đồng và hỗ trợ</h2>
                <span>Cả bốn đều có cộng đồng mạnh mẽ và tài liệu hướng dẫn phong phú.</span> <br>
                <p>AWS có thời gian trên thị trường lâu hơn, vì vậy cộng đồng và tài liệu hơn là lớn hơn.</p>
                <p>Azure có lợi thế về tích hợp với các sản phẩm Microsoft có sẵn.</p>
                <p>GCP có sự hỗ trợ mạnh mẽ cho các ứng dụng AI/ML.</p>
            </div>
            <div class="card">
                <h2>Mục tiêu của khách hàng</h2>
                <p>AWS thường được ưa chuộng trong doanh nghiệp và các tổ chức lớn.</p>
                <p>Azure thường hướng tới các tổ chức sử dụng các sản phẩm Microsoft.</p>
                <p>GCP thường hướng tới các công ty công nghệ và các ứng dụng AI/ML.</p>
                <p>IBM Cloud có sự hướng tới giải pháp doanh nghiệp và các công nghệ mới.</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>Nhóm 2</h2>
                <p>Thành viên: Trường, Linh, Chính, Hưng, Bình</p>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg" style="height: 200px;">
                    <img style="width: 100%; height: 100%" src="app/views/asset/images/aws.png" alt="AWS">
                </div><br>
                <div class="fakeimg" style="height: 200px;">
                    <img style="width: 100%; height: 100%" src="app/views/asset/images/azure.png" alt="AZURE">
                </div><br>
                <div class="fakeimg" style="height: 200px;">
                    <img style="width: 100%; height: 100%" src="app/views/asset/images/gcp.png" alt="GCP">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <h2>Cảm ơn mọi người đã xem!</h2>
    </div>
</body>
</html>
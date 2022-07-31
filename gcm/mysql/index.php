

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "test";
    $port = 3307;

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    echo "连接成功";
    $sql = "SELECT id, name FROM stu";
    $result = $conn->query($sql);
    print("\n");
    print_r($result);

    if ($result->num_rows > 0) {
        // 输出数据
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["name"] . "\n";
        }
    } else {
        echo "0 结果";
    }
    $conn->close();
    ?>

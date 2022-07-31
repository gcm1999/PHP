

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
    echo "<br>";
    print_r($result);

    if ($result->num_rows > 0) {
        // 输出数据
        while ($row = $result->fetch_assoc()) {
            echo "<br>id: " . $row["id"] . " - name: " . $row["name"];
        }
    } else {
        echo "0 结果";
    }
    // 预处理及绑定
    $stmt = $conn->prepare("INSERT INTO stu(id,name) VALUES (?, ?)");
    
    $stmt->bind_param("is", $id, $name);

    // 设置参数并执行
    $id = null;
    $name = "g1";
    $stmt->execute();

    $name = "g2";
    $stmt->execute();

    $name = "g3";

    $stmt->execute();

    echo "新记录插入成功";

    $stmt->close();
    $conn->close();
    ?>

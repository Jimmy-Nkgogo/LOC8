<<<<<<< HEAD
<?php
    while($row = mysqli_fetch_assoc($sql)) {
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                OR incoming_msg_id = {$outgoing_id}) ORDER BY message_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
            $result = $row2['message'];
        } else {
            $result = "Start conversation";
        }

        // trimming the message
        strlen($result) > 28  ? $msg = substr($result, 0, 28). '...' : $msg = $result;
        ($row2 && $outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = ""; // adding you if the message was sent by you
        
        //active status
        ($row['status'] == "offline now") ? $offline = "offline" : $offline = "";

        $output .= "<a href='chat.php?user_id=".$row['unique_id']."'>
                        <div class='content'>
                        <img src='php/Images/" . $row['image'] . "' alt='' />
                            <div class='details'>
                                <span>".$row['first_name'] . " ".$row['last_name'] . " (".$row["user_type"] . ")"."</span>
                                <p>".$you.$msg."</p>
                            </div>
                        </div>
                        <div class='status-dot ".$offline."'><i class='fas fa-circle'></i></div>
                    </a>";
    }
=======
<?php
    while($row = mysqli_fetch_assoc($sql)) {
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                OR incoming_msg_id = {$outgoing_id}) ORDER BY message_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if ($query2 && mysqli_num_rows($query2) > 0) {
            $result = $row2['message'];
        } else {
            $result = "Start conversation";
        }

        // trimming the message
        strlen($result) > 28  ? $msg = substr($result, 0, 28). '...' : $msg = $result;
        ($row2 && $outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = ""; // adding you if the message was sent by you
        
        //active status
        ($row['status'] == "offline now") ? $offline = "offline" : $offline = "";

        $output .= "<a href='chat.php?user_id=".$row['unique_id']."'>
                        <div class='content'>
                        <img src='php/Images/" . $row['image'] . "' alt='' />
                            <div class='details'>
                                <span>".$row['first_name'] . " ".$row['last_name'] . " (".$row["user_type"] . ")"."</span>
                                <p>".$you.$msg."</p>
                            </div>
                        </div>
                        <div class='status-dot ".$offline."'><i class='fas fa-circle'></i></div>
                    </a>";
    }
>>>>>>> 2928505ab68a17710076151682971b16729dfe8b
?>
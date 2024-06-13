<section class="container mt-2">
    <div class="border p-4">
        <h2 class="text-center mb-3">Messages</h2>
        <table class="table table-bordered m-2">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Objet</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($messages){
                    foreach($messages AS $message){
                        echo '<tr>';
                        echo '<td>'.$message['nom'].'</td>';
                        echo '<td>'.$message['mail'].'</td>';
                        echo '<td>'.$message['objet'].'</td>';
                        echo '<td>'.substr($message['message'], 0,10).' ...</td>';
                        echo '<td>'.$message['date'].'</td>';
                        echo '<td><a href="?action=deletemessage&id='.$message["id_message"].'">Supp</a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
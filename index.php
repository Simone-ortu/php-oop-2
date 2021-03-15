<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OOP - 2</title>
</head>
<body>
  <h1>OOP - 2</h1>
  <h2>Tabella del db</h2>
  <table>
    <thead>
      <th>User</th>
    </thead>
    <tbody>
      <tr>
        <td>name</td>
      </tr>
      <tr>
        <td>surname</td>
      </tr>
      <tr>
        <td>age</td>
      </tr>
      <tr>
        <td>rango</td>
      </tr>
      <tr>
        <td>paying</td>
      </tr>
      <tr>
        <td>points</td>
      </tr>
    </tbody>
  </table>
  <h2>Funzionamento php</h2>
  <?php

    require_once 'User.php';

    $user1 = new User('Mario', 'Rossi', 32, 3, false);
    $user1->setPoints($user1->rango, $user1->paying);
    $user1->getPoints();
    var_dump($user1);

    $user2 = new User('Pietro', 'Dallara', 20, 6, false);
    $user2->setPoints($user2->rango, $user2->paying);
    $user2->getPoints();
    var_dump($user2);

    $user3 = new User('Sebastiano', 'Bianchi', 44, 5, true);
    $user3->setPoints($user3->rango, $user3->paying);
    $user3->getPoints();
    var_dump($user3);

    $user4 = new User('Luigi', 'Belleri', 17, 2, true);
    $user4->setPoints($user4->rango, $user4->paying);
    $user4->getPoints();
    var_dump($user4);
  ?>
</body>
</html>

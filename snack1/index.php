<?php
// SNACK 1
$matches = [
  [
    'team1' => 'milano',
    'team2' => 'bologna',
    'punti1' => 55,
    'punti2' => 12
  ],
  [
    'team1' => 'svizzera',
    'team2' => 'bologna',
    'punti1' => 55,
    'punti2' => 32
  ],
  [
    'team1' => 'milano',
    'team2' => 'caserta',
    'punti1' => 55,
    'punti2' => 15
  ]
];

?>


<ul>
  <?php for ($i=0; $i < count($matches); $i++) {?>
    <?php $partita_corrente = $matches[$i];?>

      <li><?php echo $partita_corrente['team1'] ?> - <?php echo $partita_corrente['team2'] ?> | <?php echo $partita_corrente['punti1'] ?> - <?php echo $partita_corrente['punti2'] ?></li>
  <?php } ?>
</ul>

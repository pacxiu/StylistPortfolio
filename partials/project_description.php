<?php 
  $projectDescriptions = array(
    '1' => array(
      'magazine' => "Lucy's Magazine",
      'photo' => "Helena Bromboszcz",
      'model' => "Dorota Chojecka",
      'make up' => "Katarzyna Olkowska",
      'hair' => "Katarzyna Olkowska",
      'assistant' => "Kasia Danioł, Ada Moycho"
    ),
    '2' => array(
      'photo' => "Maria Cieślak",
      'model' => "Carla/ United for Models",
      'make up' => "Aleksandra Przyłusk"
    ),
    '3' => array(
      'magazine' => "Design Scen",
      'photo' => "Łukasz Kuś",
      'model' => "Julia Śmigielska",
      'make up' => "Anna Stykała",
      'hair' => "Anna Stykała",
      'assistant' => array(
        'type' => 'photo assistant',
        'name' => "Adrian Obręczarek"
      )
    ),
    '4' => array(
      'magazine' => "FGUK Magazin",
      'photo' => "Jan Wasiuchnik",
      'model' => "Lolita/ A S Management",
      'make up' => "Victoria Kalinichenko"
    ),
    '5' => array(
      'photo' => "Ula Kóska",
      'model' => "Joanna",
      'make up' => "Daria Mierzwa"
    ),
    '6' => array(
      'magazine' => "L'Offciel",
      'photo' => "Jakub Pleśniarski",
      'model' => "Weronika/ United for Models",
      'make up' => "Martyna Nowak",
      'hair' => "Alicja Lewandowska",
      'stylist' => "Marcela Stańczyk",
      'assistant' => array(
        'type' => 'stylist assistant',
        'name' => "Sylwia Morawska"
      )
    ),
    '7' => array(
      'customHTML' => "
        <p>designer: Sophie Kula</p>
        <p>photo: Piotr Domagała</p>
        <p>model: Julia/ Mango Models</p>
        <p>stylist: Karolina Chudek</p>
        <p>stylist assistants: Sylwia Morawska, Zuza Grychowska</p>
        <p>make up: Kamila Jankowska</p>
        <p>hair: Adam Wilczewski</p>
        <p>photo assistant: Dominika Bąk</p>
        <p>set designer: Zuza Rybkiewicz</p>
        <p>set designer: assistant Anna Rzeźniczek</p>
        <p>producer: Sasha Respinger</p>
      "
    ),
    '8' => array(
      'customHTML' => "
        <p class='magazine'>Glamour</p>
        <p>photo: Miłosz Rebeś</p>
        <p>model: Apolonia/ D'ivision</p>
        <p>stylist: Magda Jagnicka</p>
        <p>stylist assistants: Sylwia Morawska, Ewelina Droździuk</p>
        <p>make up: Dorota Kumosińska</p>
        <p>hair: Hubert Sygut</p>
        <p>photo assistant: Hubert Sygu</p>
      "
    ),
    '9' => array(
      'magazine' => "Glamour",
      'photo' => "Zuza Krajewska",
      'stylist' => "Michał Kuś",
      'assistant' => array(
        'type' => 'stylist assistants',
        'name' => "Sylwia Morawska, Ewelina Droździuk"
      ),
      'make up' => "Wilson",
      'hair' => "Kacper Rączkowski",
      'production' => "Bartek Szlązak, Olga Janicka"
    ),
    '10' => array(
      'customHTML' => "
        <p class='magazine'>Fashion Magazine</p>
        <p>photo: Łukasz Pukowiec</p>
        <p>model: Emilia/ D'ivision</p>
        <p>stylist: Magda Jagnicka</p>
        <p>stylist assistants: Sylwia Morawska, Ewelina Droździuk</p>
        <p>make up: Iza Kućmierowska</p>
        <p>hair: Aleksandra Płużyńska</p>
        <p>photo: assistant Tomasz Wirsk</p>
      "
    ),
    '11' => array(
      'photo' => "Natalia",
      'model' => "Anya, Mateusz/ Uncover Models"
    ),
    '12' => array(
      'photo' => "Jan Malinowski",
      'model' => "Paulina/ Neva Models",
      'make up' => "Victoria Kalinichenk0",
    ),
    '13' => array(
      'magazine' => "Hiro",
      'photo' => "Miron Chomacki",
      'model' => "Iza/ United for Models",
      'stylist' => "Sylwia Morawska",
      'make up' =>"Daria Urban",
      'hair' => "Karolina Kowalska"
    ),
    '14' => array(
      'magazine' => "C-heads Magazin",
      'photo' => "Miron Chomacki",
      'model' => "Iza/ United for Model",
      'stylist' => "Sylwia Morawsk",
      'make up' => "Daria Urba",
      'hair' => "Karolina Kowalsk"
    ),
    '15' => array(
      'magazine' => "Perjus Magazine",
      'photo' => "Ula Kóska",
      'model' => "Kasia/ United for Models",
      'stylist' => "Sylwia Morawska",
      'make up'=> "Anna Bułkowska",
      'hair' => "Trendy Hair Fashion"
    ),
    '16' => array(
      'magazine' => "Elegant Magazine",
      'photo' => "Justyna Rząca",
      'model' => "Kate/ Indeed Models Berlin",
      'stylist' => "Sylwia Morawska",
      'make up'=> "Anna Bułkowska",
      'designer'=> "Anna Tkacz"
    )
  );
?>

<div class='project-slide project-description-container'>
  <div class="project-description">
    <?php
      $projectDesc = $projectDescriptions[$projectId];
      
      if (isset($projectDesc['customHTML']))
        echo $projectDesc['customHTML'];
      else {
        if (isset($projectDesc['magazine']))
          echo "<p class='magazine'>".$projectDesc['magazine']."</p>";

        if (isset($projectDesc['photo']))
          echo "<p>photo: ".$projectDesc['photo']."</p>";

        if (isset($projectDesc['model']))
          echo "<p>model: ".$projectDesc['model']."</p>";

        if (isset($projectDesc['make up']))
          echo "<p>make up: ".$projectDesc['make up']."</p>";

        if (isset($projectDesc['hair']))
          echo "<p>hair: ".$projectDesc['hair']."</p>";

        if (isset($projectDesc['stylist']))
          echo "<p>stylist: ".$projectDesc['stylist']."</p>";

        if (isset($projectDesc['assistant']))
          if (isset($projectDesc['assistant']['type']))
            echo "<p>".$projectDesc['assistant']['type'].": ".$projectDesc['assistant']['name']."</p>";
          else
            echo "<p>assistant: ".$projectDesc['assistant']."</p>";

        if (isset($projectDesc['production']))
          echo "<p>production: ".$projectDesc['production']."</p>";

        if (isset($projectDesc['designer']))
          echo "<p>designer: ".$projectDesc['designer']."</p>";
      }
    ?>
  </div>
</div>
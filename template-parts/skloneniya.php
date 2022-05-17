<?php
function CaseName($name, $case) {
  $end_case = array();
  switch ($case){
    case "rod": // родительный - Кого? Чего?
      $end_case = array('а' => 'ы', 'б' => 'ба', 'в' => 'ва', 'г' => 'га', 'д' => 'да', 'е' => 'е', 'ж' => 'жа', 'з' => 'за', 'и' => 'и', 'й' => 'я', 'к' => 'ка', 'л' => 'ла', 'м' => 'ма', 'н' => 'на', 'о' => 'о', 'п' => 'па', 'р' => 'ра', 'с' => 'са', 'т' => 'та', 'у' => 'у', 'ф' => 'фа', 'х' => 'ха', 'ч' => 'ча', 'ш' => 'ша', 'э' => 'э', 'ю' => 'ю', 'ь' => 'я', 'я' => 'и', 'ы' => 'ю');
      break;
    case "dat": // дательный - Кому? Чему?
      $end_case = array('а' => 'е', 'б' => 'бу', 'в' => 'ву', 'г' => 'гу', 'д' => 'ду', 'е' => 'е', 'ж' => 'жу', 'з' => 'зу', 'и' => 'и', 'й' => 'ю', 'к' => 'ку', 'л' => 'лу', 'м' => 'му', 'н' => 'ну', 'о' => 'о', 'п' => 'пу', 'р' => 'ру', 'с' => 'су', 'т' => 'ту', 'у' => 'у', 'ф' => 'фу', 'х' => 'ху', 'ч' => 'чу', 'ш' => 'шу', 'э' => 'э', 'ю' => 'ю', 'ь' => 'ю', 'я' => 'ю', 'ы' => 'у');
      break;
    case "vin": // винительный - Кого? Что?
      $end_case = array('а' => 'у', 'б' => 'ба', 'в' => 'ва', 'г' => 'га', 'д' => 'да', 'е' => 'е', 'ж' => 'жа', 'з' => 'за', 'и' => 'и', 'й' => 'я', 'к' => 'ка', 'л' => 'ла', 'м' => 'ма', 'н' => 'на', 'о' => 'о', 'п' => 'па', 'р' => 'ра', 'с' => 'са', 'т' => 'та', 'у' => 'у', 'ф' => 'фа', 'х' => 'ха', 'ч' => 'ча', 'ш' => 'ша', 'э' => 'э', 'ю' => 'ю', 'ь' => 'ю', 'я' => 'ю', 'ы' => 'ю');
      break;
    case "tvo": // творительный - Кем? Чем?
      $end_case = array('а' => 'ой', 'б' => 'бом', 'в' => 'вом', 'г' => 'гом', 'д' => 'дом', 'е' => 'е', 'ж' => 'жом', 'з' => 'зом', 'и' => 'и', 'й' => 'ем', 'к' => 'ком', 'л' => 'лом', 'м' => 'мом', 'н' => 'ном', 'о' => 'о', 'п' => 'пом', 'р' => 'ром', 'с' => 'сом', 'т' => 'том', 'у' => 'у', 'ф' => 'фом', 'х' => 'хом', 'ч' => 'чом', 'ш' => 'шом', 'э' => 'э', 'ю' => 'ю', 'ь' => 'ьей', 'я' => 'ей', 'ы' => 'ей');
      break;
    case "pre": // предложный - О ком? О чём?
      $end_case = array('а' => 'е', 'б' => 'бе', 'в' => 'ве', 'г' => 'ге', 'д' => 'де', 'е' => 'е', 'ж' => 'же', 'з' => 'зе', 'и' => 'и', 'й' => 'е', 'к' => 'ке', 'л' => 'ле', 'м' => 'ме', 'н' => 'не', 'о' => 'о', 'п' => 'пе', 'р' => 'ре', 'с' => 'се', 'т' => 'те', 'у' => 'у', 'ф' => 'фе', 'х' => 'хе', 'ч' => 'че', 'ш' => 'ше', 'э' => 'э', 'ю' => 'ю', 'ь' => 'и', 'я' => 'е', 'ы' => 'и');
      break;
    default:
      $end_case = array();
  }
  $srt_count = strlen($name);
  $srt_end = $name{$srt_count-2}.$name{$srt_count-1};
  $srt_name = substr($name, 0, $srt_count-2);
  return $srt_name . $end_case[$srt_end];
}

?>
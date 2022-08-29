Привязка элемента к нескольким разделам:
Вместо поля IBLOCK_SECTION_ID, используем IBLOCK_SECTION. Значение - массив с ID разделов, к которым нужно привязать элемент


$arLoadProductArray = Array(
    ...
    "IBLOCK_SECTION" => array(0 => 58, 1 => 59),
    ...
);






....................

$sectionID[] = $args['dfm'];
$sectionID[] = $args['subcategoryOfTask'];

.....................            
            

public static function AddUpdateTask($taskID = false, $sectionID = false, $name, $previewText, $properties)
    {
        global $USER;
        Loader::includeModule("iblock");
        $el = new \CIBlockElement;

        $commentArray = Array(
            "ACTIVE" => "Y",
            "MODIFIED_BY"    => $USER->GetID(),
            "IBLOCK_ID" => Constant::TASKS_IBLOCK_ID,
            "PROPERTY_VALUES" => $properties,
            // "IBLOCK_SECTION_ID" => $sectionID ?: false,
            "IBLOCK_SECTION" => $sectionID ?: false,
            "NAME" => $name,
            "PREVIEW_TEXT" => htmlspecialchars_decode($previewText)
        );
};

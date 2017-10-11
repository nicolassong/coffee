<?php

namespace services;

class output
{
    public static function restrictionStructure($code = 0 , $note = '', $data = [])
    {
        $restrictionStructure = config::get('restriction_structure') ? : [
            'code_name'=>'code',
            'note_name'=>'note',
            'data_name'=>'data'
        ];

        return [
            $restrictionStructure['code_name']=>$code,
            $restrictionStructure['note_name']=>interpret::language($note),
            $restrictionStructure['data_name']=>$data
        ];
    }

    public static function xml($note = 'success' , $code = 0 , $data = [])
    {
        $node = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><root />");

        return self::addDataToNode($node, self::restrictionStructure($code,$note,$data))->asXML();
    }

    public static function json($note = 'success' , $code = 0 , $data = [])
    {
        return json_encode(self::restrictionStructure($code,$note,$data));
    }

    private static function addDataToNode(\SimpleXMLElement $node, $data)
    {
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                $key = "unknownNode_". (string) $key;
            }
            $key = preg_replace('/[^a-z0-9\-\_\.\:]/i', '', $key);
            if (is_array($value)) {
                $child = $node->addChild($key);
                self::addDataToNode($child, $value);
            } else {
                $value = str_replace('&', '&amp;', print_r($value, true));
                $node->addChild($key, $value);
            }
        }
        return $node;
    }
}
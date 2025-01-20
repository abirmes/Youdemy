<?php

class BootstrapUI
{

    public static function table(array $list): string
    {
        return '
        <a class="btn btn-primary w-100" href = "/cour/create"> Ajouter </a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                    ' . self::th($list[0]) . '
                    </tr>
                </thead>
                <tbody>

                    ' . self::tr($list) . '

                </tbody>
            </table>
        </div>
        ';
    }

    public static function th($obj): string
    {
        $listOfTh = '';
        foreach ($obj->getAttributes() as $value) {
            $listOfTh .= '<th scope="col">' . $value . '</th>';
        }
        $listOfTh .= '<th scope="col">action</th>';
        return $listOfTh;
    }

    public static function tr(array $list): string
    {
        $listOfTr = '';
        foreach ($list as $object) {
            $id = 0;
            $listOfTr .= '<tr> ';
            foreach ((array)$object as $key => $value) {
                if (substr($key, -3) != '_id' && substr($key, -2) == 'id') {
                    $id = $value;
                }
                if (gettype($value) == 'string' || gettype($value) == 'integer' || gettype($value) == 'double') {
                    $listOfTr .=  self::td($value);
                } else if (gettype($value) == 'object') {
                    $listOfTr .=   self::td($value->getName());
                } else if (gettype($value) == 'array') {
                    $listOfTr .=   self::td("Liste");
                }
            }
            $listOfTr .= self::actions($id, get_class($list[0]));
        }


        return $listOfTr;
    }

    public static function td($value): string
    {
        return " <td> " . $value . "</td>";
    }


    public static function actions($id, $class)
    {
        $temp =  self::td(' <a class="btn btn-primary" href= "/' . $class . '/update/' . $id . '"> update </a>');
        $temp .=  self::td(' <a class="btn btn-danger" href=  "/' . $class . '/delete/' . $id . '"> delete </a>');
        $temp .= '</tr>';

        return $temp;
    }











    public static function form($object): string
{
    $form = '<form method="POST" action="/' . get_class($object) . '/create">';
    
    foreach ($object->getAttributes() as $attribute) {
        $form .= self::input($attribute, $object);
    }

    // Add a submit button
    $form .= '<input value= "Save" type="submit" class="btn btn-primary">';
    
    $form .= '</form>';
    
    return $form;
}

public static function input($attribute, $object): string
{
    $value = $object->$attribute; 
    $input = '<div class="form-group">';
    $input .= '<label for="' . $attribute . '" class="form-label">' . ucfirst($attribute) . '</label>';
    $input .= '<input type="text" class="form-control" id="' . $attribute . '" name="' . $attribute . '" value="' . $value . '">';
    $input .= '</div>';

    return $input;
}






    
   
}

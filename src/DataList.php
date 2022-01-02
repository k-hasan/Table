<?php

namespace Khayrulhasan\Table;

class DataList extends \ArrayObject
{

    private $userList = [];
    
    public function __construct(array $arr)
    {
        $this->userList = $arr;
    }
    
    

    /*
     * a public function to return data
     */
    public function displayAsTable() // or you could even override the __toString if you want.
    {
        $sOutput = print('<table border="1"><tbody>');
            foreach ($this->userList AS $user)
            {
                    $sOutput .= print('<tr><td>'.$user->getId().'</td><td>'.$user->getName().'</td><td>'.$user->getEmail().'</td></tr>'
                );
            }
            $sOutput .= print '</tbody></table>';

        return $sOutput;
    }

    
}

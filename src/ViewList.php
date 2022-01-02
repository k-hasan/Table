<?php

namespace KhayrulHasan\Table;

class ViewList extends \ArrayObject
{
    /*
     * return data to string
     */
    public function __toString()
    {
        return $this->displayAsTable();
    }

    /*
     * a public function to return data
     */
    public function displayAsTable() // or you could even override the __toString if you want.
    {
        $sOutput = '<table border="1"><tbody>';
            foreach ($this AS $user)
            {
                $sOutput .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>',
                    $user->getId(),
                    $user->getName(),
                    $user->getEmail()
                );
            }
            $sOutput .= print '</tbody></table>';

        return $sOutput;
    }

    
}

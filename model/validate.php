<?php

/* Validate the form
 * @return boolean
 */
function validForm()
{
    global $f3;
    $isValid = true;

    if (!validName($f3->get('name')))
    {
        $isValid = false;
        $f3->set("errors['name']", "Please enter your name");
    }

    if (!validMidtermOptions($f3->get('mid')))
    {
        $isValid = false;
        $f3->set("errors['mid']", "Invalid selection");
    }

    return $isValid;
}

/* Validate a name
 * Name must not be empty and may only consist
 * of alphabetic characters.
 *
 * @param String name
 * @return boolean
 */
function validName($name)
{
    return !empty($name) && ctype_alpha($name);
}

/* Validate midterm options
 *
 * @param String mid
 * @return boolean
 */
function validMidtermOptions($mid)
{
    global $f3;
    //Condiments are optional
    if (!empty($mid))
    {
        foreach ($mid as $midOption) {
            if (!in_array($midOption, $f3->get('midtermOptions')))
            {
                return false;
            }
        }
        return true;
    }
    return false;
}
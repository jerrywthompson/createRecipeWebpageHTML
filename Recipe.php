<?php

/**
 * Description of recipe
 *
 * @author jerry
 */
class Recipe {

    // Properties
    public $name;
    public $image;
    public $type;
    public $instructions;
    public $ingredients;
    public $notes;
    public $comments;
    public $nutrition;

    //$recipe = new stdClass;
//$recipe->name = $_POST["recipeName"];
//$recipe->type = $_POST["recipeType"];
//$recipe->instructions = $_POST["instructions"];
//$recipe->ingredients = $_POST["ingredients"];
//$recipe->notes = $_POST["notes"];
//$recipe->comments = $_POST["notes"];
//$recipe->nutrition = $_POST["nutrition"];

    function __construct() {
        $this->name = $_POST["name"];
        $this->image = $_POST["image"];
        $this->type = $_POST["type"];
        $this->instructions = $_POST["instructions"];
        $this->ingredients = $_POST["ingredients"];
        $this->notes = $_POST["notes"];
        $this->comments = $_POST["comments"];
        $this->nutrition = $_POST["nutrition"];
    }

    // Methods

    function getName() {
        return $this->name;
    }

    function getImage() {
        return $this->image;
    }

    function getType() {
        return $this->type;
    }

    function getInstructions() {
        return $this->instructions;
    }

    function getIngredients() {
        return $this->ingredients;
    }

    function getNotes() {
        return $this->notes;
    }

    function getComments() {
        return $this->comments;
    }

    function getNutrition() {
        return $this->nutrition;
    }

    function setName(): void {
        $this->name = $name;
    }

    function setImage($image): void {
        $this->imagePath = $image;
    }

    function setType($type): void {
        $this->type = $type;
    }

    function setInstructions($instructions): void {
        $this->instructions = $instructions;
    }

    function setIngredients($ingredients): void {
        $this->ingredients = $ingredients;
    }

    function setNotes($notes): void {
        $this->notes = $notes;
    }

    function setComments($comments): void {
        $this->comments = $comments;
    }

    function setNutrition($nutrition): void {
        $this->nutrition = $nutrition;
    }

    function test_data() {

        $instructions = "Preheat the oven to 180C/350F. Line a large baking tray with parchment paper and set aside.
In a large, microwave safe bowl, add your shredded cheese and cream cheese. Microwave for 30 seconds, or until the cheeses have mostly melted. Remove from the microwave and whisk together, until smooth. Let the cheese cool for several minutes.
When the cheese has cooled slightly, add in the almond flour and two of the eggs, and mix well, until a smooth dough remains.
Using your hands, form 10 balls of dough. Place them on the lined tray. Whisk the remaining egg and using a pastry brush, brush the exterior of each of the rolls.
Bake the rolls for 25 minutes, or until golden on the outside. Serve warm.";
        
        $ingredients = "2 cups shredded cheese mozzarella or cheddar * See notes
1/4 cup cream cheese softened
1 1/2 cups almond flour
3 large eggs Divided ** See notes
1 tsp baking powder optional";

        $notes = "* Low moisture mozzarella cheese is best, as it has minimal flavor. 
** 2 eggs will be used for the dough, 1 egg for the egg wash on top. 
TO STORE: Leftover rolls can be stored in the refrigerator, covered, for up to 1 week. 
TO FREEZE: Place the cooled rolls in a ziplock bag and store them in the freezer for up to 6 months. Thaw completely before reheating. 
TO REHEAT: You must reheat the rolls, as they are too dense at room temperature/cooled. Either microwave for 30 seconds or place them in a preheated oven until warm.";

        $comments = "The Big Man’s World ® Arman Liew owns the copyright on all images and text and does not allow for its original recipes, pictures and content to be reproduced anywhere other than this site unless authorization is given. If you enjoyed this recipe and would like to publish it on your own website, please re-write it, in your own words and link back to my site and recipe page. Copying and/or pasting full recipes and pictures to social media or personal blogs is strictly prohibited. Read my disclosure and copyright policy. This post may contain affiliate links.

The Big Man’s World ® Arman Liew owns the copyright on all images and text and does not allow for its original recipes, pictures and content to be reproduced anywhere other than this site unless authorization is given. If you enjoyed this recipe and would like to publish it on your own website, please re-write it, in your own words and link back to my site and recipe page. Copying and/or pasting full recipes and pictures to social media or personal blogs is strictly prohibited. Read my disclosure and copyright policy. This post may contain affiliate links.

ish it on your own website, please re-write it, in your own words and link back to my site and recipe page. Copying and/or pasting full recipes and pictures to social media or personal blogs is strictly prohibited. Read my disclosure and copyright policy. This post may contain affiliate links.";

        $nutrition = "Serving: 1serving | Calories: 203kcal | Carbohydrates: 5g | Protein: 11g | Fat: 17g | Sodium: 222mg | Potassium: 46mg | Fiber: 2g | Vitamin A: 309IU | Calcium: 186mg | Iron: 1mg | NET CARBS: 3g";


        $this->name = "Corn Dog";
        $this->image = "cocktails.jpg";
        $this->type = "main_dish";
        $this->instructions = $instructions;
        $this->ingredients = $ingredients;
        $this->notes = $notes;
        $this->comments = $comments;
        $this->nutrition = $nutrition;
        
        return $this;
    }

}

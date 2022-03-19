<?php
class Property{
    private $identifier;
    private $transaction_type;
    private $property_type;
    private $address;
    private $image;
    private $price;
    private $description;
    private $mainFeatured;


    public function listProperties(){
        $link=Connexion::connect();
        $sql="SELECT identifier,transaction_type,property_type,address,image,price,description, mainFeatured FROM properties";
        $stmt=$link->prepare($sql);
        $stmt->execute();
        $properties=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $properties;
    }
    public function seePropertyById(){
        $identifier = $_GET['id'];
        $link=Connexion::connect();
        $sql="SELECT identifier,transaction_type,property_type,address,image,price,description, mainFeatured FROM properties WHERE identifier = :identifier";

        $stmt=$link->prepare($sql);
        $stmt->bindParam(":identifier",$identifier,PDO::PARAM_INT);

        if($stmt->execute()){
            $property=$stmt->fetch();
            $this->setIdentifier($identifier);
            $this->setAddress($property['address']);
            $this->setTransactionType($property['transaction_type']);
            $this->setPropertyType($property['property_type']);
            $this->setImage($property['image']);
            $this->setPrice($property['price']);
            $this->setDescription($property['description']);
            $this->setMainFeatured($property['mainFeatured']);
            return true;
        }
        return false;        
    }

    public function addImage(){
        $image='no-image.png';

        if(isset($_POST['currentImage'])){
            $image=$_POST['currentImage'];
        };

        if($_FILES['image']['error'] == 0){

            $route='images/';
            $temp=$_FILES['image']['tmp_name'];
            $image=$_FILES['image']['name'];

            move_uploaded_file($temp,$route.$image);
        }

        return $image;
    }

    public function addProperty(){
        
        $transaction_type=$_POST['transaction_type'];
        $property_type=$_POST['property_type'];
        $address=$_POST['address'];
        $image=$this->addImage();
        $price=$_POST['price'];
        $description=$_POST['description'];
        $mainFeatured=$_POST['mainFeatured'] == 'true' ? true : false;

        $link=Connexion::connect();

        $sql="INSERT INTO properties VALUES

            (0,:transaction_type, :property_type, :address, :image, :price, :description, :mainFeatured)";

        $stmt=$link->prepare($sql);
        
        $stmt->bindParam(':transaction_type', $transaction_type, PDO::PARAM_STR);
        $stmt->bindParam(':property_type',$property_type, PDO::PARAM_STR);
        $stmt->bindParam(':address',$address,PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':price',$price, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':mainFeatured',$mainFeatured, PDO::PARAM_BOOL);

        if($stmt->execute()){
            $this->setTransactionType($transaction_type);
            $this->setPropertyType($property_type);
            $this->setAddress($address);
            $this->setImage($image);
            $this->setPrice($price);
            $this->setDescription($description);
            $this->setMainFeatured($mainFeatured);
        return true;
        }

        return false;
    }

    public function modifyProperty(){

        $identifier=$_POST['identifier'];
        $transaction_type=$_POST['transaction_type'];
        $property_type=$_POST['property_type'];
        $address=$_POST['address'];
        $image=$this->addImage();
        $price=$_POST['price'];
        $description=$_POST['description'];
        $mainFeatured=$_POST['mainFeatured'] == 'true' ? true : false;

        $link=Connexion::connect();

        $sql="UPDATE properties SET 
        transaction_type=:transaction_type, 
        property_type=:property_type, 
        address=:address, 
        image=:image, 
        price=:price, 
        description=:description, 
        mainFeatured=:mainFeatured
        WHERE identifier= :identifier";

        $stmt=$link->prepare($sql);
        
        $stmt->bindParam(':transaction_type', $transaction_type, PDO::PARAM_STR);
        $stmt->bindParam(':property_type',$property_type, PDO::PARAM_STR);
        $stmt->bindParam(':address',$address,PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':price',$price, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':mainFeatured',$mainFeatured, PDO::PARAM_BOOL);
        $stmt->bindParam(':identifier',$identifier, PDO::PARAM_INT);

        if($stmt->execute()){
            $this->setTransactionType($transaction_type);
            $this->setPropertyType($property_type);
            $this->setAddress($address);
            $this->setImage($image);
            $this->setPrice($price);
            $this->setDescription($description);
            $this->setMainFeatured($mainFeatured);
            $this->setIdentifier($identifier);

            return true;
        }
        return false;

    }
    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param mixed $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return mixed
     */
    public function getTransactionType()
    {
        return $this->transaction_type;
    }

    /**
     * @param mixed $transaction_type
     */
    public function setTransactionType($transaction_type)
    {
        $this->transaction_type = $transaction_type;
    }

    /**
     * @return mixed
     */
    public function getPropertyType()
    {
        return $this->property_type;
    }

    /**
     * @param mixed $property_type
     */
    public function setPropertyType($property_type)
    {
        $this->property_type = $property_type;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



    /**
     * Get the value of mainFeatured
     */ 
    public function getMainFeatured()
    {
        return $this->mainFeatured;
    }

    /**
     * Set the value of mainFeatured
     *
     * @return  self
     */ 
    public function setMainFeatured($mainFeatured)
    {
        $this->mainFeatured = $mainFeatured;

        return $this;
    }
}

?>
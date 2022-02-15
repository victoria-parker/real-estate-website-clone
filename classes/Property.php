<?php
class Property{
    private $identifier;
    private $transaction_type;
    private $property_type;
    private $address;
    private $image;
    private $price;
    private $description;


    public function listProperties(){
        $link=Connexion::connect();
        $sql="SELECT identifier,transaction_type,property_type,address,image,price,description FROM properties";
        $stmt=$link->prepare($sql);
        $stmt->execute();
        $properties=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $properties;
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


}

?>
<?php namespace Magestore\Student\Model;

use Magestore\Student\Api\Data\StudentInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Student  extends \Magento\Framework\Model\AbstractModel implements StudentInterface, IdentityInterface
{

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'student';

    /**
     * @var string
     */
    protected $_cacheTag = 'student';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'student';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magestore\Student\Model\ResourceModel\Student');
    }
    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get Student Id
     *
     * @return int|null
     */
    public function getStudentId()
    {
        return $this->getData(self::STUDENT_ID);
    }

    /**
     * Get Student Fullname
     *
     * @return string
     */
    public function getStudentFullname()
    {
        return $this->getData(self::STUDENT_FULLNAME);
    }

    /**
     * Get Student Class
     *
     * @return string|null
     */
    public function getStudentClass()
    {
        return $this->getData(self::STUDENT_CLASS);
    }

    /**
     * Get Student Uni
     *
     * @return string|null
     */
    public function getStudentUni()
    {
        return $this->getData(self::STUDENT_UNI);
    }


    /**
     * Set ID
     *
     * @param int $id
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentId($id)
    {
        return $this->setData(self::STUDENT_ID, $id);
    }

    /**
     * Set student name
     *
     * @param string $name
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentFullname($name)
    {
        return $this->setData(self::STUDENT_FULLNAME, $name);
    }

    /**
     * Set class
     *
     * @param string $class
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentClass($class)
    {
        return $this->setData(self::STUDENT_CLASS, $class);
    }/**
     * Set uni
     *
     * @param string $uni
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentUni($uni)
    {
        return $this->setData(self::STUDENT_UNI, $uni);
    }


}
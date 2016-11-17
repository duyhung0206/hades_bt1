<?php
namespace Magestore\Student\Api\Data;


interface StudentInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const STUDENT_ID       = 'student_id';
    const STUDENT_FULLNAME     = 'student_fullname';
    const STUDENT_CLASS    = 'student_class';
    const STUDENT_UNI      = 'student_university';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getStudentId();

    /**
     * Get URL Key
     *
     * @return string
     */
    public function getStudentFullname();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getStudentClass();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getStudentUni();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentId($id);

    /**
     * Set Name
     *
     * @param string $name
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentFullname($name);

    /**
     * Set Class
     *
     * @param string $class
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentClass($class);

    /**
     * Set Uni
     *
     * @param string $uni
     * @return \Magestore\Student\Api\Data\StudentInterface
     */
    public function setStudentUni($uni);

}
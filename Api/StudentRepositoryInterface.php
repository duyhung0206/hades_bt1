<?php
namespace Magestore\Student\Api;


interface StudentRepositoryInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const STUDENT_ID       = 'student_id';
    const STUDENT_FULLNAME     = 'student_fullname';
    const STUDENT_CLASS    = 'student_class';
    const STUDENT_UNI      = 'student_uni';

    /**
     * Create/Update new checkout agreements with data object values
     *
     * @param \Magestore\Student\Api\Data\StudentInterface $student
     * @return \Magestore\Student\Api\Data\StudentInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException If there is a problem with the input
     * @throws \Magento\Framework\Exception\NoSuchEntityException If a ID is sent but the entity does not exist
     */
    public function saveStudent(\Magestore\Student\Api\Data\StudentInterface $student);

    /**
     * Get List Student
     *
     * @return \Magestore\Student\Api\Data\StudentInterface[]
     */
    public function getListStudent();

    /**
     * Delete checkout agreement
     *
     * @param \Magestore\Student\Api\Data\StudentInterface $student
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException If there is a problem with the input
     */
    public function deleteStudent(\Magestore\Student\Api\Data\StudentInterface $student);

}
<?php namespace Magestore\Student\Model;

use Magestore\Student\Api\StudentRepositoryInterface;

class StudentRepository  extends \Magento\Framework\Model\AbstractModel implements StudentRepositoryInterface
{

    /**
     * Collection factory.
     *
     * @var StudentCollectionFactory
     */
    private $collectionFactory;

    /**
     * @var StudentResource
     */
    private $resourceModel;

    /**
     * @param StudentCollectionFactory $collectionFactory Collection factory.
     * @param StudentResource $studentResource
     * @param StudentFactory $studentFactory
     */
    private $studentFactory;

    public function __construct(
        \Magestore\Student\Model\ResourceModel\Student $studentResource,
        \Magestore\Student\Model\ResourceModel\StudentFactory $collectionFactory
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->resourceModel = $studentResource;
        //$this->_init('Magestore\Student\Model\ResourceModel\Student');
    }
    /**
     * Save Student
     * @param string $student
     * @return \Magestore\Student\Api\StudentRepositoryInterface
     */
    public function saveStudent(\Magestore\Student\Api\Data\StudentInterface $student) {
    try {
        $this->resourceModel->save($student);
    } catch (\Exception $e) {
        throw new \Magento\Framework\Exception\CouldNotSaveException(
            __('Unable to save student %1', $student->getStudentId())
        );
    }
    return $student;
    }

    /**
     * Get List Student
     *
     * @return array
     */
    public function getListStudent() {
        return $studentCollection = $this->collectionFactory->create();
    }

    /**
     * Get title
     *
     * @return string|null
     */
    public function deleteStudent(\Magestore\Student\Api\Data\StudentInterface $student){
    try {
        $this->resourceModel->delete($student);
    } catch (\Exception $e) {
        throw new \Magento\Framework\Exception\CouldNotDeleteException(
            __('Unable to remove student %1', $student->getAgreementId())
        );
    }
    return true;
    }
}
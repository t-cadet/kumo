<?php

namespace kumo\DAO;

use kumo\Domain\Chapter;

class ChapterDAO extends DAO
{
    /**
     * Return the number of chapters.
     *
     * @return int The number of chapters.
     */
    public function count() {
        $sql = "SELECT * FROM chapter";
        $count = $this->getDb()->executeQuery($sql)->rowCount();
        return $count;
    }

    /**
     * Return a list of all chapters, sorted by date (most ancient first).
     *
     * @return array A list of all chapters.
     */
    public function findAll() {
        $sql = "SELECT * FROM chapter ORDER BY id";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $chapters = array();
        foreach ($result as $row) {
            $chapters[] = $this->buildDomainObject($row);
        }
        return $chapters;
    }

    /**
     * Creates a Chapter object based on a DB row.
     *
     * @param array $row The DB row containing Chapter data.
     * @return \kumo\Domain\Chapter
     */
    protected function buildDomainObject(array $row) {
        $chapter = new Chapter();
        $chapter->setId($row['id']);
        $chapter->setPrefix($row['prefix']);
        $chapter->setTitle($row['title']);
        $chapter->setContent($row['content']);
        $chapter->setDate($row['add_date']);
        return $chapter;
    }
    
    /**
     * Returns a chapter matching the supplied id.
     *
     * @param integer $id
     *
     * @return \kumo\Domain\Chapter|throws an exception if no matching chapter is found
     */
    public function find($id) {
        $sql = "SELECT * FROM chapter WHERE id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No chapter matching id " . $id);
    }

    /**
     * Saves an chapter into the database.
     *
     * @param \kumo\Domain\Chapter $chapter The chapter to save
     */
    public function save(Chapter $chapter) {
        $chapterData = array(
            'title' => $chapter->getTitle(),
            'prefix' => $chapter->getPrefix(),
            'content' => nl2br($chapter->getContent()),
            );

        if ($chapter->getId()) {
            // The chapter has already been saved : update it
           
            /*foreach($chapterData as $data){
                if($data==""){
                    $sql ="SELECT ? FROM chapter WHERE id=?";
                    $row = $this->getDb()->fetchAssoc($sql, array($data, $chapter->getId()));
                    $chapterData[]=$row->fetch();
                }
            }*/

            if($chapterData['title']==""){
                $sql ="SELECT title FROM chapter WHERE id=?";
                $row = $this->getDb()->fetchAssoc($sql, array($chapter->getId()));
                $chapterData['title']=$row['title'];
            }
            if($chapterData['prefix']==""){
                $sql ="SELECT prefix FROM chapter WHERE id=?";
                $row = $this->getDb()->fetchAssoc($sql, array($chapter->getId()));
                $chapterData['prefix']=$row['prefix'];
            }
            if($chapterData['content']==""){
                $sql ="SELECT content FROM chapter WHERE id=?";
                $row = $this->getDb()->fetchAssoc($sql, array($chapter->getId()));
                $chapterData['content']=$row['content'];
            }
            
            $this->getDb()->update('chapter', $chapterData, array('id' => $chapter->getId()));

        } else {
            // The chapter has never been saved : insert it
            $this->getDb()->insert('chapter', $chapterData);
            // Get the id of the newly created chapter and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $chapter->setId($id);
        }
    }
}
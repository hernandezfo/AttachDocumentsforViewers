<?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
<?php else: ?>
        <li>
            <?= $this->modal->medium('file', t('Attach a document'), 'TaskFileController', 'create', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
        <li>
            <?= $this->modal->medium('camera', t('Add a screenshot'), 'TaskFileController', 'screenshot', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>
        </li>
<?php endif ?>

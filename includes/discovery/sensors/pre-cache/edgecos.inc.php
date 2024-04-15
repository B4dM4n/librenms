<?php

$limits = [
  'portTransceiverThresholdInfoRxPowerLowAlarm',
  'portTransceiverThresholdInfoRxPowerLowWarn',
  'portTransceiverThresholdInfoRxPowerHighAlarm',
  'portTransceiverThresholdInfoRxPowerHighWarn',
  'portTransceiverThresholdInfoTxPowerLowAlarm',
  'portTransceiverThresholdInfoTxPowerLowWarn',
  'portTransceiverThresholdInfoTxPowerHighAlarm',
  'portTransceiverThresholdInfoTxPowerHighWarn',
];
foreach ($limits as $limit) {
  echo $limit;
  $pre_cache[$limit] = snmpwalk_cache_multi_oid($device, $limit, [], 'ECS4120-MIB');
  foreach ($pre_cache[$limit] as $index => $value) {
    $pre_cache[$limit][$index][$limit] = $value[$limit] / 100;
  }
}

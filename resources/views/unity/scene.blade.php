%YAML 1.1
%TAG !u! tag:unity3d.com,2011:
--- !u!header
SerializedFile:
  m_TargetPlatform: 4294967294
  m_UserInformation: 
@foreach($objects as $object)
{{$object->toString()}}
@endforeach